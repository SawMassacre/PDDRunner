<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.cdnfonts.com/css/cyrillic-pixel-7" rel="stylesheet">
<link href="https://allfont.net/allfont.css?fonts=pixel-cyr-normal" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>bla</title>
</head>
<body class="backgroundcolor">
    <div class="but" id="but" onmousedown="Play()" style="display: block;"></div>
    <audio id = "songtwo"><source src="src/sounds/start.mp3" type = "audio/mp3"></audio>
    <div class="hide" id="hide" style="display: none;">
        <p id="image" onclick="takeDamage()">  </p>    
        <div class="health_bar" id = "health_bar">
                <div class="health" ><img id="health1" src="/src/imgs/health.png" alt=""></div>
                <div class="health" ><img id="health2" src="/src/imgs/health.png" alt=""></div>
                <div class="health" ><img id="health3" src="/src/imgs/health.png" alt=""></div>
        </div>
        <div class="game_over" id="game_over" style="display: none;"><img src="/src/imgs/game_over.png" alt=""></div>
        <section class="map" id = "map"></section>
        <div class="but2" id="but2" onclick="Restart()" style="display: none;"></div>
        <div class="hide2" id="hide2" style="display: block;">
            <div class="container">
                <section class="questions">
                        <div class="option" id="win">
                        <div class="buttons">
                            <p id = "playingNow"> Now plying: Juice World - Lucid Dreams </p>
                            <img src="src/imgs/playbutton.png" id = "icon">
                            <img src="src/imgs/fontButtonPix.png" id = "icon2"></div>
                        </div>
                        <script>
                        var text;
                        globalThis.check = 0;
                        icon2.onclick = function () {
                            soundMaker(4);
                        text = document.getElementsByClassName('questions')[0];
                        if(check == 0) {
                        text.style.fontFamily = "Helvetica, sans-serif";
                        icon2.src = "src/imgs/fontButtonNormal.png";
                        check = 1;
                        } else if (check == 1){
                        text.style.fontFamily = "Pyxel-Cyr-Normal";
                        icon2.src = "src/imgs/fontButtonPix.png";
                        check = 0;
                        }
                        }
                        </script>
                        <audio id = "song"><source src="src\sounds\lucid-dreams-2019-remaster-8-bit-tribute-to-juice-wrld-8-bit-universe.mp3" type = "audio/mp3"></audio>
                        <div class="questionbox">
                            <div class="image"><img id="q_img" src="" alt=""></div>
                            <div class="question" id="question"></div>
                        </div>
                        <div class="answers">
                            <div class="answer" id="answer1" onclick="AnswerCheck(1)"></div>
                            <div class="answer" id="answer2" onclick="AnswerCheck(2)"></div>
                            <div class="answer" id="answer3" onclick="AnswerCheck(3)"></div>
                            <div class="answer" id="answer4" onclick="AnswerCheck(4)"></div>
                        </div>
                        <div class="option2" >
                            <div class="statistic">Правильные ответы:
                                <div class="statistic_text" id="wins"></div>
                            </div>
                            <div class="statistic">Неправильные ответы:
                                <div class="statistic_text" id="loses"></div>
                            </div>
                            <div class="statistic">Стрик:
                                <div class="statistic_text" id="rage_mode"></div>
                            </div>
                            <div class="timer">Таймер:
                                <div class="countdown" id="countdown"></div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/script.js"></script>
    <script src="/sounds.js"></script>
</body>
</html>