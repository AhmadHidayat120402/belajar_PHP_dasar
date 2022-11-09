<?php

// digunakan untuk looping sebuah array

$buah = ["apel", "jeruk", "salak"];

var_dump($buah);

foreach ($buah as $key => $value) {
  echo $key . " " . $value . '<br/>';
}
