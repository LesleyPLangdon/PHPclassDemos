<?php

$foodChoice = "pasta";
switch ($foodChoice){
    case "pancakes":  
      echo "Breakfast for dinner, great choice.";
      break;
    case "pizza":  
      echo "The old standby, can't go wrong with all that gooey cheese.";
      break;
    case "cheeseBurger":  
      echo "Fire up the grill!!";
      break; 
    case "tacos": 
      echo "Shrimp or carnitas are my favorites.";
      break;
    default:
      echo "invalid food selection";
}


lb();

$grade = 74;
if ($grade >= 93){
    echo "You earned an A!!";
  } elseif ($grade >= 85) {
    echo "You earned a B!";
  } elseif ($grade >= 75) {
    echo "You earned a C";
  } else {
    echo "See me after class to discuss plan for improvement.";
  }

  lb();

  $answer = 4;
  if ($answer <= 10){
    echo "That's right!";
  }

  lb();

$passed = TRUE;
if ($passed) {
  echo "I passed my test!!";
}

lb();

if ("red" !== "blue"){
  echo "The color is blue";
}

lb();

// $score = 77;
// if ($score < 100) {
//   return "A";
// } elseif ($score < 90) {
//   return "B";
// } elseif ($score < 80) {
//   return "C";
// } elseif ($score < 70) {
//   return "D";
// } else {
//   return "F";
// }

if (3 > 10) {
  echo "true";
} else {
  echo "false";
}
lb();

$pizza = true;
if ($pizza){
  echo "Pizza for dinner";
} else {
  echo "Burgers for dinner";
}

lb();

function returnSeason() {
  $month = readline("What month is it? ");
  switch ($month) {
    case "December":
    case "January":
    case "February":
      return "winter";
      break;
    case "March":
    case "April":
    case "May":
      return "spring";
      break;
    case "June":
    case "July":
    case "August":
      return "summer";
      break;
    case "September":
    case "October":
    case "November":
      return "fall";
      break;  
  }
  lb();
  }
  echo returnSeason();
  // echo returnSeason("April");

lb();
  
  // echo "\n\n";
  // echo returnSeason("August");
  // echo "\n\n";
  // echo returnSeason("October"); 

  $first = TRUE;
  $second = FALSE;


  $var1 = TRUE;
  $var2 = FALSE;
  $var3 = TRUE;

 
if ($var1) {
  if ($var2){
    echo "apple";
  } else {
      echo "banana";
  }
} elseif ($var3) {
    echo "grape";
} else {
  echo "orange";
}


$hasPowerup = true;
$underAttack = false;
$healthPoints = 20;
$shieldActivated = false;

//If the player has a power-up, check if they are under attack. If they are, activate the shield immediately.
if ($hasPowerup) {
  if ($underAttack) {
    $shieldActivated = TRUE;
  } elseif ($healthPoints < 30) {
    echo "Use power-up";
  }
} 

//If they are not under attack, decide whether to save the power-up or activate it based on their current health points. If health is less than 30, use the power-up.

//If the player does not have a power-up, check if their shield is already activated. If it is, just continue waiting. If not, recommend retreating.

$hasPowerup = true;
$underAttack = false;
$healthPoints = 20;
$shieldActivated = false;

//If the player has a power-up, check if they are under attack. If they are, activate the shield immediately.

//If they are not under attack, decide whether to save the power-up or activate it based on their current health points. If health is less than 30, use the power-up.
function gamePlay($hasPowerup, $underAttack, $healthPoints, $shieldActivated) {
if ($hasPowerup) {
    if ($underAttack) {
        $shieldActivated = true;
    } else {
        if ($healthPoints < 30) {
        echo "Use powerup\n";
        $hasPowerup = false; 
        } 

}
//If the player does not have a power-up, check if their shield is already activated. If it is, just continue waiting. If not, recommend retreating.
} else {
    if ($shieldActivated == false) {
        echo "RETREAT!!!!\n";
    }
}
echo "Power Up: $hasPowerup\nUnder Attack: $underAttack\nHealth Points: $healthPoints\nShield Activated: $shieldActivated\n";
}

gamePlay(true, false, 20, false);

?>