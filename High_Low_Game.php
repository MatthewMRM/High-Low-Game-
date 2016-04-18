<?php

// game picks a random number between 1 and 100.
// prompts user to guess the number
do {
  $randNum = rand(1, 100);
  $guesses = 0;
  $playerGuess = -1;

  if ($argv == 3) {
    echo "Input a number between {$argv[min(1)]} and {$argv[max(100)]}\n";
  }
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