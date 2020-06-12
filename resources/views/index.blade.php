<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Roleta</title>
    {{-- <link rel="stylesheet" href="./roleta.css"> --}}
    <style>
        .container {
03         width: 600vw;
04         height: 100vh;
05         background: #6C7A89;
06         display: flex;
07         flex-direction: row;
08         justify-content: center;
09         align-items: center
10     }

        .folha {
    position: relative;
    background-color: #cdcdcd;
    width: 600px;
    height: 600px;
    padding: 50px;
}

.roleta {
    position: absolute;
    right: 200px;
    border: 10px solid #FFF;
    position: sticky;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    overflow: hidden;
/*    animation: roleta 5s linear infinite;*/
}

path {
  fill: transparent;
}

.seta {
    position: absolute;
    left: 48.5%;
    border-bottom: 0px solid transparent;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-top: 40px solid #33c9dc;
    width: 0;
    height: 0;
    z-index: 999;
    animation: animacaoSeta .35s linear infinite;
}

.box1,
.box2,
.box3,
.box4,
.box5,
.box6,
.box7,
.box8 {
    
    position: absolute;
    width: 0;
    height: 0;
}

.box1 {
    
    border-top: 150px solid transparent;
    border-right: 150px solid transparent;
    border-bottom: 150px solid #f6685e;
    border-left: 150px solid #f6685e;
}

.box5 {
    border-top: 150px solid #e91e63;
    border-right: 150px solid #e91e63;
    border-bottom: 150px solid transparent;
    border-left: 150px solid transparent;
}

.box2 {
    border-top: 150px solid #9c27b0;
    border-right: 150px solid transparent;
    border-bottom: 150px solid transparent;
    border-left: 150px solid #9c27b0;
    left: 50%;
}

.box6 {
    border-top: 150px solid transparent;
    border-right: 150px solid #673ab7;
    border-bottom: 150px solid #673ab7;
    border-left: 150px solid transparent;
    left: 50%
}

.box4 {
    border-top: 150px solid transparent;
    border-right: 150px solid transparent;
    border-bottom: 150px solid #2196f3;
    border-left: 150px solid #2196f3;
    top: 50%;
    left: 50%;
}

.box8 {
    border-top: 150px solid #34399d;
    border-right: 150px solid #34399d;
    border-bottom: 150px solid transparent;
    border-left: 150px solid transparent;
    top: 50%;
    left: 50%;
}

.box3 {
    border-top: 150px solid #009688;
    border-right: 150px solid transparent;
    border-bottom: 150px solid transparent;
    border-left: 150px solid #009688;
    top: 50%;
}

.box7 {
    border-top: 150px solid transparent;
    border-right: 150px solid #ffeb3b;
    border-bottom: 150px solid #ffeb3b;
    border-left: 150px solid transparent;
    top: 50%;
}

@keyframes roleta {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg)
    }
}

@keyframes animacaoSeta {
    0% { transform: rotate(0deg)}
    25% { transform: rotate(-15deg)}
    75% { transform: rotate(15deg)}
    100% { transform: rotate(0deg)}
}

.premio {
    
    position: absolute;
    z-index: 999;
    font-size: 27px;
    font-weight: bold;
    color: white;
}

.premio1 {
    top: 35%;
    left: 8%;
    transform: rotate(25deg);
}

.premio2 {
    top: 15%;
    left: 30%;
    transform: rotate(55deg);
}

.premio3 {
    top: 15%;
    left: 55%;
    transform: rotate(115deg);
}

.premio4 {
    top: 33%;
    right: 10%;
    transform: rotate(150deg);
}

.premio5 {
    top: 60%;
    right: 10%;
    transform: rotate(200deg);
}

.premio6 {
    top: 80%;
    right: 30%;
    transform: rotate(250deg);
}

.premio7 {
    top: 80%;
    left: 30%;
    transform: rotate(306deg);
}

.premio8 {
    top: 60%;
    left: 10%;
    transform: rotate(333deg);
}

.btnRoleta {
    position: absolute;
    color: white;
    background-color: #000;
    border: 15px solid #000;
    cursor: pointer;
    top:45%;
    left: 45%;
    font-size: 35px;
    border-radius: 50%;
    height: 42px;
    width: 42px;
    text-align: center;
}

.play {
    z-index: 999;
}

.stop {
/*    visibility: hidden;*/
    animation-play-state: paused;
}

 
    </style>
</head>

<body>  
    <div class="container">
    <div class="folha">
        <div class="seta"></div>
        <div class="roleta" id="roleta">
            <div class="box1"></div>
            <div class="box2"></div>
            <div class="box3"></div>
            <div class="box4"></div>
            <div class="box5"></div>
            <div class="box6"></div>
            <div class="box7"></div>
            <div class="box8"></div>
            
            
            <div class="premio premio1" id="opt1">100 reais</div>
            <div class="premio premio2" id="opt0">110 reais</div>
            <div class="premio premio3" id="opt7">115 reais</div>
            <div class="premio premio4" id="opt6">120 reais</div>
            <div class="premio premio5" id="opt5">125 reais</div>
            <div class="premio premio6" id="opt4">130 reais</div>
            <div class="premio premio7" id="opt3">140 reais</div>
            <div class="premio premio8" id="opt2">150 reais</div>
            
            <div id="btnPlay" class="btnRoleta play" onclick="playOnClick()">►</div>
            <div id="btnStop" class="btnRoleta stop" onclick="stopOnClick()">❚❚</div>
        </div>
    </div>
    
    <p id="msgGanhador"></p>
</div>
</body>

<script >
 
    function playOnClick() {   
        globalObjects = {
            btnPlay: document.getElementById("btnPlay"),
            roleta: document.getElementById("roleta"),
            btnStop: document.getElementById("btnStop")
        }
        
        globalObjects.timeInitial = new Date();
        globalObjects.btnPlay.style.visibility = "hidden";
        globalObjects.btnStop.style.visibility = "visible";
        globalObjects.roleta.style.animation = "roleta 2s linear infinite";
    }
    
    function calculate() {
        var timeFinal = new Date();
        var tempo = Math.abs(timeFinal - globalObjects.timeInitial);
        var box = parseInt(tempo / 250);
        if (box > 7)
            box = parseInt(box % 8);
        
        console.log(globalObjects.timeInitial, timeFinal, tempo, box, (tempo / 250));
        return box;
    }
    
    function stopOnClick() {
        globalObjects.roleta.style["animation-play-state"] = "paused";
       globalObjects.btnStop.style.visibility = "hidden";
       globalObjects.btnPlay.style.visibility = "visible";
        var box = calculate();
        var boxGanhador = document.getElementById("opt".concat(box))
        document.getElementById("msgGanhador").innerHTML = "Parabéns! Você ganhou ".concat(boxGanhador.innerHTML);
    }
        </script>
</html>
