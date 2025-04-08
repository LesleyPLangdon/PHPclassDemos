let form = document.querySelector("#madlibs");
let outputDiv = document.getElementById("output");

form.addEventListener("submit", function(e) {
  e.preventDefault(); 

  
  let pluralNoun = document.getElementById("noun").value;
  let adj = document.getElementById("adjective").value;
  let verbWord = document.getElementById("verb").value;
  let funnySound = document.getElementById("sound").value;
  let number = document.getElementById("number").value;

  let story = "In a world of " + adj + " " + pluralNoun +
              ", something decided to " + verbWord +
              " every time it heard '" + funnySound.toUpperCase() +
              "'! After " + number + " attempts, a mysterious event unfolded.";

  outputDiv.innerText = story;
});