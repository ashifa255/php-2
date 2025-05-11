<?php
// Initialize quiz questions and answers

$question1 = "What is the capital of France?";
$option1 = "a) London\nb) Paris\nc) Berlin";
$answer1 = "b";

$question2 = "What is the color of the sky on a clear day?";
$option1 = "a) Green\nb) Blue\nc) Red";
$answer1 = "b";

$question1 = "What is 5 + 5?";
$option1 = "a) 7\nb) 10\nc) 9";
$answer1 = "b";

$score = 0;

echo "Welcome to the Quiz App!\n";
echo "Answer each question by entering a, b, or c.\n\n";

// Question 1

echo "Question 1 : " . $question1 . "\n";
echo $option1 . "\n";
echo "Your answer: ";
$user_answer = trim(fgets(STDIN));
if (strtolower($user_answer) == $answer1) {
    echo "Correct!\n";
    $score++;
} else {
    echo "Incorrect. The correct asnwer is " . $answer1 . "\n";
}

// Question 2

echo "\nQuestion 2 : " . $question2 . "\n";
echo $option2 . "\n";
echo "Your answer: ";
$user_answer = trim(fgets(STDIN));
if (strtolower($user_answer) == $answer2) {
    echo "Correct!\n";
    $score++;
} else {
    echo "Incorrect. The correct asnwer is " . $answer2 . "\n";
}

// Question 3

echo "\nQuestion 3 : " . $question3 . "\n";
echo $option3 . "\n";
echo "Your answer: ";
$user_answer = trim(fgets(STDIN));
if (strtolower($user_answer) == $answer3) {
    echo "Correct!\n";
    $score++;
} else {
    echo "Incorrect. The correct asnwer is " . $answer3 . "\n";
}

// Final results 
echo "\nQuiz complete!\n";
echo "You got " . $score . "out of 3 correct.\n";

if ($score == 3) {
    echo "Perfect score! Well done!\n";
} elseif ($score >= 1) {
    echo "Good try!\n";
} else {
    echo "Better luck next time!\n";
}
