<?php 

function belajar(){
    echo "saya belajar PHP";
}

function LuasPersegiPanjang($p = 5, $l = 3){
    $Luas = $p * $l;

    echo $Luas;
}

function Luas($p = 5, $l = 3){
    $Luas = $p * $l;

    return $Luas;
}

function output(){
    return "belajar function";
}

echo Luas(20, 55) *2;
