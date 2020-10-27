var character = document.getElementById("character");
var block = document.getElementById("block");
var counter = 0;
//adds the .animate class to #character id 
function jump() {
    if (character.classList == "animate") { return } 
    character.classList.add("animate");
    setTimeout(function () {
        character.classList.remove("animate");
    }, 500); 
}
//checks whether or not you have lost
var checkDead = setInterval(function () {
    let characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top")); //gets top position of character
    let blockLeft = parseInt(window.getComputedStyle(block).getPropertyValue("left")); //gets left position of the block to see if it's hitting character
    if (blockLeft < 20 && blockLeft > -20 && characterTop >= 130) { //if block is within the px of the character && character hasn't jumped over the block, you lose
        block.style.animation = "none";
        alert("Game Over. score: " + Math.floor(counter / 100));
        counter = 0;
        block.style.animation = "block 1s infinite linear";
    } else {
        counter++;
        document.getElementById("scoreSpan").innerHTML = Math.floor(counter / 100);
    }
}, 20); //adds 1 to the score every 2 seconds if you are not dead

