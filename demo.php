<?php
function lb() {
    echo "\n";
}
/*  
IF STATEMENTS:
if (some condition) {
    do something
}
    ////////////////////////////////////////////////////////
if (some condition) {
    do something
} else {
    do something else
}
    ///////////////////////////////////////////////////////
if (some condition) {
    do something
} elseif (some condition) {
    do something else
} else {
    do something else
}


*/
/*
We’re creating a form with a checkbox. We want the checkbox to be colored green if the answer is correct or red if the answer is incorrect.

To start, define a function called markAnswer(). The function should take a single boolean value as an argument. This argument will be TRUE if the answer is correct or FALSE otherwise.

Now, it’s time to write the body of the function!

If the answer was correct, the markAnswer() function should return "green". Otherwise, the function should return "red".

Time to test your function! You’ll want to invoke the markAnswer() function twice — once with TRUE as an argument and again with FALSE. To ensure the function returns the correct values, use print or echo statements to print the result.

*/

function markAnswer($answer) {
    if ($answer) {
      return "green";
    } else {
      return "red";
    }
  }
  
  echo markAnswer(True);
  lb();
  echo markAnswer(false);
  lb();

  /*
  COMPARISON OPERATORS
  <
  >
  <=
  >=
  ==
  ===
  !=
  !===
  */
 /*
 Write a function chooseCheckoutLane(). This function should take in a single number argument representing the number of items a customer has. If the customer has 12 items or fewer, the function should return "express lane". Otherwise, the function should return "regular lane".

 */
function chooseCheckoutLane($items) {
    if ($items <= 12) {
      return "express lane";
    } else {
      return "regular lane";
    }
  }
  /*
  In the U.S., citizens can vote if they are 18 years old or older. Write a function canIVote() that takes in a number representing an age, and return the string "yes" if they can vote, and the string "no" if they cannot.
  */
  function canIVote($age) {
    if ($age >= 18) {
      return "yes";
    } else {
      return "no";
    }
  }
  
  echo chooseCheckoutLane(10);
  lb();
  echo chooseCheckoutLane(15);
  lb();
  echo canIVote(11);
  lb();
  echo canIVote(22);
  lb();

  /* Write a function agreeOrDisagree() that takes in two strings, and returns "You agree!" if the two strings are the same and "You disagree!" if the two strings are different.
  */
  function agreeOrDisagree($str1, $str2) {
    if ($str1 === $str2) {
      return "You agree!";
    } else {
      return "You disagree!";
    }
  }
  
  echo agreeOrDisagree("yes", "yes");
  lb();
  echo agreeOrDisagree("yes", "no");
  lb();
  /* You’re going to write a function to check if it’s time for a user to renew their subscription.

Write a function checkRenewalMonth() that takes in a user’s renewal month as a string (e.g. "January").

Your function should get the current month using the PHP built-in date() function (see the hint for help with this). It should compare the current month to the renewal month passed in. If the renewal month is not the current month, the function should return the string "Welcome!". Otherwise it should return the string "Time to renew".
*/
  function checkRenewalMonth($month) {
    if ($month !== date("F")) {
      return "Welcome!";
    } else {
      return "Time to renew";
    }
  }
  
  echo checkRenewalMonth("April");
  lb();
  echo checkRenewalMonth("May");
  lb();

/*
You’re going to write a function to determine the likely genetic relationship between two people.

Write a function, whatRelation() that has one number parameter representing the percentage of DNA the two people share. Your function should print the likely relationship as a string. We expect the number passed in to always be an integer from 0 to 100

Here’s how it should calculate the relationship:

100 should print "identical twins"
35 through99 should print "parent and child or full siblings"
14through 34 should print "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings"
6 through 13 should print "first cousins"
3 through 5 should print "second cousins"
1 through 2 should print "third cousins"
0 should print "not genetically related"
*/
function whatRelation($num1) {
    if ($num1 === 100) {
      echo "identical twins";
    } elseif ($num1 >= 35) {
      echo "parent and child or full siblings";
    } elseif ($num1 >= 14) {
      echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($num1 >= 6) {
      echo "first cousins";
    } elseif ($num1 >= 3) {
      echo "second cousins";
    } elseif ($num1 >= 1) {
      echo "third cousins";
    } else {
      echo "not genetically related";
    }
  }
  
  whatRelation(100);
  lb();
  whatRelation(75);
  lb();
  whatRelation(33);
  lb();
  whatRelation(22);
  lb();
  whatRelation("blue");
  lb();
/*
  SWITCH STATEMENT
  switch(value being checked) {
    case "option1":
        do something;
        break;
    case "option2":
        do something;
        break;
  }
*/
function airQuality($color) {
    switch ($color) {
      case "green":
        echo "good";
        break;
      case "yellow":
        echo "moderate";
        break;
      case "orange":
        echo "unhealthy for sensitive groups";
        break;
      case "red":
        echo "unhealthy";
        break;
      case "purple":
        echo "very unhealthy";
        break;
      case "maroon":
        echo "hazardous";
        break;
      default:
        echo "invalid color"; 
    }
    }
    airQuality("green");
    lb();
    airQuality("purple");
    lb();
    airQuality("red");
    lb();
    /*
    Switch Statements: Fall through

    Without break, all code after match will run until a break is hit or code ends

    */
    
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

/*
        Ternary Operator
        (conditon to check) ? do if true : do if false
        
        function chooseCheckoutLane($items) {
    if ($items <= 12) {
      return "express lane";
    } else {
      return "regular lane";
    }
  }
 function canIVote($age) {
    if ($age >= 18) {
      return "yes";
    } else {
      return "no";
    }
  }
  */

  function ternaryCheckout($items) {
    return $items <= 12 ? "express lane" : "regular lane";
  }
  
  function ternaryVote($age) {
    return $age >= 18 ? "yes" : "no";
  }
  
  echo ternaryCheckout(11);
  lb();
  echo ternaryVote(11);
  lb();
  echo ternaryCheckout(22);
  lb();
  echo ternaryVote(22);
  lb();
  /*
  Truthy and Falsy
  if not falsy than truthy
  Falsy Values:
  Empty strings
    null
    an undefined or undeclared variable
    an empty array
    the number 0
    the string "0"
  */
  function truthyOrFalsy($testVal) {
    return $testVal ? "True" : "False";
  }
  
  echo truthyOrFalsy("purple");
  lb();
  echo truthyOrFalsy(0);
  lb();
/*
readline()
takes user input from terminal
*/
echo "Hello, there. What's your first name?\n";
$name = readline(">> ");
switch ($name) {
  case strlen($name) > 8:
    echo "Hi, $name. That's a long name.\n";
    break;
  case strlen($name) > 3:
    echo "Hi, $name.\n";
    break;
  case strlen($name) <= 3:
    echo "Hi, $name. That's a short name.\n";
    break;
  default:
    echo "I'm sorry, I didn't get that. Could you please enter your name again?\n";
}

/*
NESTED CONDITIONALS
if (condition1) {
    if (condition2) {
        do something if condtion1 and condition2 are both true
    }
}

*/
function both($str1, $str2){
    if ($str1 === TRUE) {
      if ($str2 === TRUE) {
        return "both";
      } else {
      return "not both";
    }
    } else {
      return "not both";
    }
  }
  
  echo both(TRUE, TRUE);
  lb();
  echo both(TRUE, FALSE);
  lb();
  /*
  LOGICAL OPERATORS
  && = and (if both are true, it will return true. if one is false, it will return false)
  and = and ()
  || = or (if one is true, it will return true. if both are true, it will return true)
  or = or ()
  xor = exclusive or (if one is true and the other is false, it will return true. if both are true, it will return false)
  ! = not ()
  */

  /*
  include!!!!!
  */
?>