<style>
/* From Uiverse.io by marcelodolza */ 
.button-send {
  --primary: #7253c6;
  --neutral-1: #f7f8f7;
  --neutral-2: #e7e7e7;
  --radius: 14px;
  color: black; 
  cursor: pointer;
  border-radius: var(--radius);
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
  border: none;
  box-shadow: 0 0.5px 0.5px 1px rgba(255, 255, 255, 0.2),
    0 10px 20px rgba(0, 0, 0, 0.2), 0 4px 5px 0px rgba(0, 0, 0, 0.05);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;  
  transition: all 0.3s ease;
  min-width: 200px;
  padding: 20px;
  height: 68px;
  font-family: "Galano Grotesque", Poppins, Montserrat, sans-serif;
  font-style: normal;
  font-size: 18px;
  font-weight: 600;
}
.button-send:focus{
  color: black;
}
.button-send:hover {
  transform: scale(1.02);
  box-shadow: 0 0 1px 2px rgba(255, 255, 255, 0.3),
    0 15px 30px rgba(0, 0, 0, 0.3), 0 10px 3px -3px rgba(0, 0, 0, 0.04);
    color: black;
}
.button-send:active {
  transform: scale(1);
  box-shadow: 0 0 1px 2px rgba(255, 255, 255, 0.3),
    0 10px 3px -3px rgba(0, 0, 0, 0.2);
    color: black;
}
.button-send:after {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: var(--radius);
  border: 2.5px solid transparent;
  background: linear-gradient(var(--neutral-1), var(--neutral-2)) padding-box,
    linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.45))
      border-box;
  z-index: 0;
  transition: all 0.4s ease;
}
.button-send:hover::after {
  transform: scale(1.05, 1.1);
  box-shadow: inset 0 -1px 3px 0 rgba(255, 255, 255, 1);
}
.button-send::before {
  content: "";
  inset: 7px 6px 6px 6px;
  position: absolute;
  background: linear-gradient(to top, var(--neutral-1), var(--neutral-2));
  border-radius: 30px;
  filter: blur(0.5px);
  z-index: 2;
}
.state p {
  display: flex;
  align-items: center;
  justify-content: center;
   text-align: center;
  /* Remove any margins that might affect centering */
  margin: 0;
  text-align: center;
  padding-left: 20px;
}
.state .icon {
  position: absolute;
  left: 20px; /* Adjust this value to position the icon as desired */
  top: 50%;
  bottom: 0;
  margin: auto;
  transform: translateY(-50%);
  transform: scale(1.25);
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}
.state .icon svg {
  overflow: visible;
}

/* Outline */
.outline {
  position: absolute;
  border-radius: inherit;
  overflow: hidden;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.4s ease;
  inset: -2px -3.5px;
}
.outline::before {
  content: "";
  position: absolute;
  inset: -100%;
  background: conic-gradient(
    from 180deg,
    transparent 60%,
    white 80%,
    transparent 100%
  );
  animation: spin 2s linear infinite;
  animation-play-state: paused;
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.button-send:hover .outline {
  opacity: 1;
}
.button-send:hover .outline::before {
  animation-play-state: running;
}

/* Letters */
.state p span {
  display: block;
  opacity: 0;
  animation: slideDown 0.8s ease forwards calc(var(--i) * 0.03s);
  color: black !important;
}
.button-send:hover p span {
  opacity: 1;
  animation: wave 0.5s ease forwards calc(var(--i) * 0.02s);
}
.button-send:focus p span {
  opacity: 1;
  animation: disapear 0.6s ease forwards calc(var(--i) * 0.03s);
}
@keyframes wave {
  30% {
    opacity: 1;
    transform: translateY(4px) translateX(0) rotate(0);
  }
  50% {
    opacity: 1;
    transform: translateY(-3px) translateX(0) rotate(0);
    color: var(--primary);
  }
  100% {
    opacity: 1;
    transform: translateY(0) translateX(0) rotate(0);
  }
}
@keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-20px) translateX(5px) rotate(-90deg);
    color: var(--primary);
    filter: blur(5px);
  }
  30% {
    opacity: 1;
    transform: translateY(4px) translateX(0) rotate(0);
    filter: blur(0);
  }
  50% {
    opacity: 1;
    transform: translateY(-3px) translateX(0) rotate(0);
  }
  100% {
    opacity: 1;
    transform: translateY(0) translateX(0) rotate(0);
  }
}
@keyframes disapear {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: translateX(5px) translateY(20px);
    color: var(--primary);
    filter: blur(5px);
  }
}

/* Plane */
.state--default .icon svg {
  animation: land 0.6s ease forwards;
}
.button-send:hover .state--default .icon {
  transform: rotate(45deg) scale(1.25);
}
.button-send:focus .state--default svg {
  animation: takeOff 0.8s linear forwards;
}
.button-send:focus .state--default .icon {
  transform: rotate(0) scale(1.25);
}
@keyframes takeOff {
  0% {
    opacity: 1;
  }
  60% {
    opacity: 1;
    transform: translateX(70px) rotate(45deg) scale(2);
  }
  100% {
    opacity: 0;
    transform: translateX(160px) rotate(45deg) scale(0);
  }
}
@keyframes land {
  0% {
    transform: translateX(-60px) translateY(30px) rotate(-50deg) scale(2);
    opacity: 0;
    filter: blur(3px);
  }
  100% {
    transform: translateX(0) translateY(0) rotate(0);
    opacity: 1;
    filter: blur(0);
  }
}

/* Contrail */
.state--default .icon:before {
  content: "";
  position: absolute;
  top: 50%;
  height: 2px;
  width: 0;
  left: -5px;
  background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.5));
}
.button-send:focus .state--default .icon:before {
  animation: contrail 0.8s linear forwards;
}
@keyframes contrail {
  0% {
    width: 0;
    opacity: 1;
  }
  8% {
    width: 15px;
  }
  60% {
    opacity: 0.7;
    width: 80px;
  }
  100% {
    opacity: 0;
    width: 160px;
  }
}

/* States */
.state {
  /* padding-left: 29px; */
  z-index: 2;
  display: flex;
  position: relative;
   /* Remove any existing padding */
   padding: 0;
  /* Center the content within the state div */
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}
.state--default span:nth-child(4) {
  margin-right: 5px;
}
.state--sent {
  display: none;
}
.state--sent svg {
  transform: scale(1.25);
  margin-right: 8px;
}
.button-send:focus .state--default {
  position: absolute;
}
.button-send:focus .state--sent {
  display: flex;
}
.button-send:focus .state--sent span {
  opacity: 0;
  animation: slideDown 0.8s ease forwards calc(var(--i) * 0.2s);
}
.button-send:focus .state--sent .icon svg {
  opacity: 0;
  animation: appear 1.2s ease forwards 0.8s;
}
@keyframes appear {
  0% {
    opacity: 0;
    transform: scale(4) rotate(-40deg);
    color: var(--primary);
    filter: blur(4px);
  }
  30% {
    opacity: 1;
    transform: scale(0.6);
    filter: blur(1px);
  }
  50% {
    opacity: 1;
    transform: scale(1.2);
    filter: blur(0);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
.state--default .icon {
  position: absolute;
  left: 5px !important; /* Adjust this value as needed */
  top: 50%;
  transform: translateY(-50%) !important;
}
.state--sent .icon{
  position: absolute;
  left: 50px;
  top: 50%;
  transform: translateY(-50%);
}



body{
  background-color: #000;
}

</style>