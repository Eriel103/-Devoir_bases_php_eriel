<?php
//les variables
$a=35;
$b=14;

echo "LA valeur de a est ".$a. " est celle de b est ".$b;

//Les operateurs arithmetique

$c= $a+$b;
echo "</br>La somme de ".$a. " est celle de ".$b." est ".$c;

$d= $c/5;

echo "</br>le resultat de la division de " .$c. " par 5 est ".$d;

//les boolens

if($a != $b){
    echo "</br> ".$a. " et ".$b." sont differents";
}elseif ($a < $b) {
    # code...
    echo $a." est superieur a".$b;
}else {
    
    echo $b." est superieur a ".$a;
}

//les tableaux
$cars = array("toyota", "nissan", "lexus", "mercedes");
var_dump($cars);

function multiplication($e,$f){

    $c=$e * $f;

    return $c;
}

echo multiplication(12,24);

