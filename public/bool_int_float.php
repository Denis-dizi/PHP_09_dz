<?php
    $a = true; // assign true to $a
    $b = false; // assign false to $b
    $c = 5 > 3; //$c should be boolean with value of true;
    $d = 4 < 3; //$s should be boolean with value of false;
    
    //with var dump we get the data type AND value
    var_dump($a);
    var_dump($b);
    //so $b will not print directly when it is false
    echo "<hr>" . $a . "<hr>" . $b . "<hr>";
    echo "<hr>" . $c . "<hr>" . $d . "<hr>";

//integers - parasite veselie skaitļi
    $a = 128;
    var_dump($a);
    
//floats - number contain a fractional part (2.56, 1.24, 7E-10)
    $a = 2.56;
    var_dump($a);

    $a = 2.56e3; // 2.56 multiplied by 3rd power of 10
    var_dump($a);

    $a = 2.56e-5; // 2.56 multiplied by -5th power of 10 
    var_dump($a);
