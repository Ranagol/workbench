<?php

/**
 * The FizzBuzz problem is a classic test given in coding interviews. The task is simple: Print 
 * integers one-to-N, but print “Fizz” if an integer is divisible by three, “Buzz” if an integer is 
 * divisible by five, and “FizzBuzz” if an integer is divisible by both three and five.
 */
for ($i=1; $i <= 100; $i++) { 
    switch ($i) {
        case $i % 3 === 0 && $i % 5 === 0:
            echo 'FizzBuzz' . '<br>';
            break;

        case $i % 5 === 0:
            echo 'Fizz' . '<br>';
            break;

        case $i % 3 === 0:
            echo 'Buzz' . '<br>';
            break;
                          
        default:
            echo $i . '<br>';
            break;
    }
}