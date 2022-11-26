var arr;
var memory_arr = new Array();
var rand
var a
var question
var img
var answer1
var answer2
var answer3
var answer4
var correct_answer = 0
var correct_count=0
var wrong_count=0
var count = 0;

function AnswerCheck(button_index){
    if (button_index==correct_answer){
        correct_count++

    }
    else{
        wrong_count++
    }
    GetQuestion();
}

function Random(){
    rand = Math.floor(Math.random() * 40);
}

function PutQuestions(){
    question = arr[rand][1];
    img = arr[rand][6];
    answer1 = arr[rand][2]
    answer2 = arr[rand][3]
    answer3 = arr[rand][4]
    answer4 = arr[rand][5]
    correct_answer = arr[rand][7]
    document.getElementById('question').textContent = question;
    document.getElementById('q_img').src = img;
    document.getElementById('answer1').textContent = answer1;
    document.getElementById('answer2').textContent = answer2;
    document.getElementById('answer3').textContent = answer3;
    document.getElementById('answer4').textContent = answer4;
}
function GetQuestion(){
    Random();
    if(memory_arr.includes(rand) == false){
        memory_arr.push(rand);
        PutQuestions();
    }
    else{
        GetQuestion();
    }
}

function GetData(){
    $.ajax({
        url: '/DataBase.php',
        type: 'POST',
        cache: false,
        dataType: 'html',
        success: function(data){
            arr = JSON.parse(data);
        } 
    })
}

function Play(){

    GetData();
    GetQuestion();
    document.getElementById('hide').style.display = 'block';
    document.getElementById('but').style.display = 'none';

}



var tID; //we will use this variable to clear the setInterval()

/*function animateScript() {
    var    position = 240; //start position for the image slicer
    const  interval = 15; //100 ms of interval for the setInterval()
    tID = setInterval ( () => {
    document.getElementById("image").style.backgroundPosition = 
    `-${position}px 0px`; 
//we use the ES6 template literal to insert the variable "position"
if (position < 1200)
    { position = position + 240;}
    //we increment the position by 256 each time
        else
    { position = 240; }
//reset the position to 256px, once position exceeds 1536px
}
, interval ); //end of setInterval
} //end of animateScript()
*/
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function carTremle() {

}

function carRoaming() {
    let element = document.getElementById('image').style.top;
    const  interval = 10;
        for (i; i < 112; i++) {
        document.getElementById('image').style.top = i + 'px';
        sleep(500);
        }
}

function carHopOnStart() {
    //at the start of the game the car will hop on a screen from the left
    //too complicated at the moment
}

let damage = 0;
let damage1 = 550;
let damage2 = 300;

function takeDamage() {
    damageAnimation();
    if (damage == 2) {
        gameOver();
    }
    damage += 1;
}

function damageAnimation() {
    if (damage == 0) {
        document.getElementById('image').style.left = damage1 + 'px';
        document.getElementById('image').style.background = "url('src/imgs/carGifDamagedOnce.gif')";
        document.getElementById('image').style.backgroundSize = "cover";
        document.getElementById('image').style.filter = "invert(10%) drop-shadow(0px -15px 20px rgb(255, 165, 40))";
    } else if (damage == 1) {
        document.getElementById('image').style.left = damage2 + 'px';
        document.getElementById('image').style.background = "url('src/imgs/carGifDamagedTwice.gif')";
        document.getElementById('image').style.backgroundSize = "cover";
        document.getElementById('image').style.filter = "invert(15%) drop-shadow(0px -15px 20px rgb(138, 3, 3))";
    }
}

function gameOver() {
    alert('game over! study harder!');
}