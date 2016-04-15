<?php
// The specs for the game are:
// game picks a random number between 1 and 100.
// prompts user to guess the number
do {
  $randNum = rand(1, 100);
  $guesses = 0;
  $playerGuess = -1;
  while ($playerGuess != $randNum) {
    $guesses ++;
    echo "Input a number between 1 and 100.\n";
    $playerGuess = fgets(STDIN);
    if ($playerGuess == $randNum) {
      echo "GOOD GUESS\n";
      echo "It took you $guesses guesses!\n";
    } else if ($playerGuess < $randNum) {
      echo "HIGHER\n";
    } else if ($playerGuess > $randNum) {
      echo "LOWER\n";
    }
  }
  echo "New Game?";
  $newGame = trim(fgets(STDIN));
} while ($newGame == "yes");