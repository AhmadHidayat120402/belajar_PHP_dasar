<?php

// sebuah blok statement yang dapat dipanggil berulang kali

function sayHalo($nama)
{
  echo "hallo " . $nama . ' !' . '<br/>';
}
sayHalo("Dayat");
sayHalo("Ahmad");
sayHalo("Zen");

function tambah($a, $b)
{
  $total = $a + $b;
  echo $total . '<br/>';
}

tambah(10, 30);


// function default
function noName($nama = "Tanpa Nama")
{
  echo "hallo " . $nama . ' !' . '<br/>';
}
noName();
