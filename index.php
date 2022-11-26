<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://fonts.cdnfonts.com/css/cyrillic-pixel-7" rel="stylesheet">
<link href="https://allfont.net/allfont.css?fonts=pixel-cyr-normal" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>bla</title>
</head>
<body class="backgroundcolor">
    <div class="but" id="but" onclick="Play()" style="display: block;">PLAY</div>
    <div class="hide" id="hide" style="display: none;">
    <p id="image" onclick="takeDamage()">  </p>    
        <section class="map"></section>

        <div class="container">
            <section class="questions">
                    <div class="option" id="win">
                        <div class="buttons"><img src="src/imgs/playbutton.png" id = "icon">
                        <img src="src/imgs/fontButtonPix.png" id = "icon2"></div>
                    </div>
                    <audio id = "song">
                        <source src="src\sounds\lucid-dreams-2019-remaster-8-bit-tribute-to-juice-wrld-8-bit-universe.mp3" type = "audio/mp3">
                    </audio>
                    <script>
                        var song = document.getElementById("song");
                        var icon = document.getElementById("icon");

                        icon.onclick = function () {
                            if(song.paused){
                                song.play();
                                icon.src = "src/imgs/pausebutton.png";
                            }
                            else{
                                song.pause();
                                icon.src = "src/imgs/playbutton.png";
                            }
                        }
                    </script>

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
                                text.style.fontFamily = "Pixel Cyr Normal', arial";
                                icon2.src = "src/imgs/fontButtonPix.png";
                                check = 0;
                            }
                        }
                    </script>

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
                    <div class="option2" id="lose"></div>
            </section>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>