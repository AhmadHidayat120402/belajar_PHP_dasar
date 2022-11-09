<?php
// array

// indexed array
$buah = ["apel", "salak", "pir", "pisang", "nangka"];
// var_dump($buah);
// memanggil
echo $buah[1] . '<br/>';

// Associative array
$nama_buah =  [
  "buah1" => "apel",
  "buah2" => "jeruk",
  "buah3" => "nangka",
  "buah4" => "pepaya",
];
// var_dump($nama_buah);
echo $nama_buah['buah4'] . '<br/>';

// multidimensional array
$c = [
  'a' => $buah,
  'b' => $nama_buah,
];

// var_dump($c);
echo $c['a'][3];

$d = [
  'c' => $c,
  'lainnya ' => [1, 2, 3, 4, 10]
];
// var_dump($d);
