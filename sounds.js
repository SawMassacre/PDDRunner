var song = document.getElementById("song");
var icon = document.getElementById("icon");

    icon.onclick = function () {
        document.getElementById("playingNow").style.opacity = "100%";
        if(song.paused){
            song.play();
            document.getElementById("icon").src = "/src/imgs/pausebutton.png";
        }
        else{
            song.pause();
            document.getElementById("icon").src = "/src/imgs/playbutton.png";
        }
    }
    image.onclick = function () {
        var turbo = new Audio('src/sounds/tuuuuurbooooo.mp3')
        turbo.play();
    }