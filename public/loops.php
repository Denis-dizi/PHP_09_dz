<?php
    //https://developer.hyvor.com/tutorials/php/loops
    //A loop is a sequence of instructions that is repeated while a certain condition is true.
    echo "<ul>";
    $it = 0;
    while ($it < 5) {
        echo "<li id='item-$it'>My list item $it</li>";
        $it++;
    }
    echo "</ul>";
    echo "<hr>";

    //do while will always execute once 
    //it will check the condition only at the end
    $a = 0;
    do {
        echo 'The number is ' . $a;
    } while ($a > 0);
    echo "<hr>";
    
    // The for loop is used when you know in advance how many times the script should run.
    // https://www.w3schools.com/php/php_looping_for.asp
    echo "<ol>";
    for ($i = 0; $i < 5; $i++) {
        echo "<li id='ol-item-$i'>My list item $i</li>";
    }
    echo "</ol>";

    echo "<hr>";
  