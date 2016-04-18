<?php

// game picks a random number between 1 and 100.
// prompts user to guess the number
if ($argc == 3) {
$min = $argv[1];
$max = $argv[2];
}
do {
  $randNum = rand($min, $max);
  $guesses = 0;
  $playerGuess = -1;

  while ($playerGuess != $randNum) {
    $guesses ++;
    echo "Input a number between 1 and 100.\n";
    $playerGuess = fgets(STDIN);

    if ($playerGuess == $randNum) {
      echo "Finally...\n";
      echo "It took you $guesses guesses!\n";
    } else if ($playerGuess < $randNum) {
      echo "HIGHER\n";
    } else if ($playerGuess > $randNum) {
      echo "LOWER\n";
    }
  }
// Prompts new game  
  echo "New Game?";
  $newGame = trim(fgets(STDIN));
} while ($newGame == "yes");