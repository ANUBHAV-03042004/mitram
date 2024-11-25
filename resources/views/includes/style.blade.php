<style>
    
.form {
display: flex;
flex-direction: column;
gap: 10px;
max-width: 350px;
padding: 20px;
border-radius: 20px;
position: relative;
background-color: #1a1a1a;
color: #fff;
border: 1px solid #333;
width: 90%;
margin: 0 auto;
z-index: 1;
}

.reg-container {
display: flex;
justify-content: center;
align-items: center;
height: 100vh; /* Set the desired height */
background-color: #000; /* Dark black background */
}
body{
background-color: #000;
}

.title {
font-size: 28px;
font-weight: 600;
letter-spacing: -1px;
position: relative;
display: flex;
align-items: center;
padding-left: 30px;
color: #27a776;
}

.title::before {
width: 18px;
height: 18px;
}

.title::after {
width: 18px;
height: 18px;
animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
position: absolute;
content: "";
height: 16px;
width: 16px;
border-radius: 50%;
left: 0px;
background-color:  #27a776;
}

.message, 
.signin {
font-size: 14.5px;
color: rgba(255, 255, 255, 0.7);
}

.signin {
text-align: center;
}

.signin a:hover {
text-decoration: underline;
color: #27a776;
}

.signin a {
color:  #27a776
}

.flex {
display: flex;
width: 100%;
gap: 6px;
}

.form label {
position: relative;
width:100%;
z-index: 2;
}

.form label .input {
background-color: #333;
color: #fff;
width: 100%;
padding: 20px 05px 05px 10px;
outline: 0;
border: 1px solid rgba(105, 105, 105, 0.397);
border-radius: 10px;
position: relative;
z-index: 1;
}

.form label .input + span {
color: rgba(255, 255, 255, 0.5);
position: absolute;
left: 10px;
top: 0px;
z-index: 1;
font-size: 0.9em;
cursor: text;
transition: 0.3s ease;
z-index: 2;
}

.form label .input:placeholder-shown + span {
top: 12.5px;
font-size: 0.9em;
}

.form label .input:focus + span,
.form label .input:valid + span {
color:  #27a776;
top: 0px;
font-size: 0.7em;
font-weight: 600;
}

.input {
font-size: medium;
}

.submit {
position: relative;
border: none;
outline: none;
padding: 10px;
border-radius: 10px;
color: #fff;
font-size: 16px;
transform: .3s ease;
background-color:  #27a776;
z-index: 2;
}

.submit:hover {
background-color:#156345;

}

@keyframes pulse {
from {
transform: scale(0.9);
opacity: 1;
}

to {
transform: scale(1.8);
opacity: 0;
}
}


/* error */
.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}
</style>

