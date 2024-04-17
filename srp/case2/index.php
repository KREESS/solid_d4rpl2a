<?php

include_once "MahasiswaView.php";
include_once "Mahasiswa.php";

$mahasiswa = new Mahasiswa("2205001", "Aditya");
$mahasiswaView = new MahasiswaView();
$mahasiswaView->showMahasiswa($mahasiswa);
