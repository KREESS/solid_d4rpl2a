<?php

include "Persegi.php";

class PenghitungPersegi
{
    public function hitungLuasPersegi(Persegi $persegi): int
    {
        return $persegi->getSisi() * $persegi->getSisi();
    }
}
