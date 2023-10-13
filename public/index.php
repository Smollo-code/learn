<?php
//phpinfo();
$neu = 3 / 3.5;
$test = 'Hallo Welt:' . $neu;
echo $test;
$test5 = '6'; //Integer(Int)
$test6 = 3.14; //Float
$test7 = True; //Boolean(bool)
$test8 = 'String'; //String(str)
$test9 = []; //Array
$test10 = Null; //nix

if ((!$test10 && $test6 > 1) && $test10 === 1){
    echo 'Test';
} elseif ($test8 === 'florian') {
    echo 'true';
} else {
    echo 'ahhhh';
}
$array = [1,2,3,4,'5'];
var_dump($array);
echo $array[3];