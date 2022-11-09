<?php

//operator aritmatika
// + , - , * , / , % , **

$a = 10;
$b = 20;
$total = $a + $b;
// echo $total;

// operator assignment
$c = 30;
$d = 40;
$d += $c;
echo $d;

// operator comparison / pembanding
$a1 = 30;
$b1 = 40;

$komparasi =  $a1 == $b1; //equal

echo var_dump($komparasi);

$komparasi =  $a1 === $b1; // identikal = cek value dan tipe data
$komparasi =  $a1 != $b1; // not equal
$komparasi =  $a1 !== $b1; // not identikal

// lebih lanjut buka web w3school opeartor php

// operator increment decrement
$n = 1;
$n++; // increment

$m = 4;
$m--; // decrement


//  opeartor String
$gabung1 = "Ahmad";
$gabung2 = " Hidayat";

$gabung = $gabung1 . $gabung2;
echo $gabung;
