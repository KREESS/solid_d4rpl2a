<?php

include_once "PerhitunganPersegi.php";
include_once "Persegi.php";

$persegi = new Persegi(8);
$penghitungPersegi = new PenghitungPersegi();
echo "Luas Persegi: " . $penghitungPersegi->hitungLuasPersegi($persegi);
