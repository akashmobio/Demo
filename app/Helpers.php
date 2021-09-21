<?php

function getMyText(){
    return "This is Called Helper File";
}

function myArray($val){
    $arr = explode(' ',$val);
    return $arr;
}