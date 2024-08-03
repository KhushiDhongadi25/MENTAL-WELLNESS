const sub=document
document.getElementById('emotionForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const emotionDropdown = document.getElementById('emotionDropdown');
    const selectedEmotion = emotionDropdown.value;
    
    if (selectedEmotion) {
        window.location.href = "./assesment/mood/" + selectedEmotion + ".html";

    } else {
        alert("Please select an emotion.");
    }
});

var card1=document.querySelectorAll(".card1");
var card2=document.querySelectorAll(".card2");
var card3=document.querySelectorAll(".card3");
var container=document.getElementById("notsure");
function fun1(){
    container.style.backgroundColor="#f9d8d6a8";
}
function fun2(){
    container.style.backgroundColor="#eff9da";
}
function fun3(){
    container.style.backgroundColor="#d6cdeaa5";
}
function resetBackground(){
    container.style.backgroundColor="aliceblue";
}

// logout
function logout() {
    // Perform any logout operations here, such as clearing session data

    // Navigate to the logout page
    window.location.href = '/final_pro/projects/landing_pg/landing.html';
}

// menu button
const menuButton = document.getElementById('menuButton');

menuButton.addEventListener('click', () => {
    menuButton.classList.toggle('cross');
});



document.getElementById('menuButton').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    if (menu.style.left === '0px') {
        menu.style.left = '-880px'; // Hide the menu
    } else {
        menu.style.left = '0px'; // Show the menu
    }
});
