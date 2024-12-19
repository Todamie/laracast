<?php 

function var_dump_die($global)
{
    echo '<pre>';
    var_dump($global);
    echo '</pre>';
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}