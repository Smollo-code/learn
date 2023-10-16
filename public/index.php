<?php
header("Location: main.html");
exit;
?>
phpinfo();
$neu = 3 / 3.5;
$test = 'Hallo Welt:' . $neu;
echo $test;
$test5 = 6; //Integer(Int)
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
$array = [
    5 => $test8,
    6 => 'Hallo Welt'
];
var_dump($array);

foreach ($array as $key => $value) {
    continue;
    echo '<h1>' . $key . $value . '</h1>';
}

while ($test5 < 30) {
    $test5++;
    echo 'Done';
}

for ($i = 1; $i < 10; $i++) {
    echo 'Hello';
}

$i = 0;
do {
    echo $i;
} while ($i > 0);

$test8 = 'world';
echo match ($test8) {
    'Hallo' => 'Welt',
    'Welt' => 'Hallo;',
    default => 'nix',
};*/
