<?php

use function PHPSTORM_META\type;

function faire_cafe($eau,$cafe,$sucre="morceau",$lait="nido")
{

    return $eau + $cafe;
}


?>

<?php
/**somme de 2, 3 nombres, 4 nombres */
//Definition
function somme(int $val1,int $val2,int $val3=0,int $val4=0,): int
{
    return $val1+$val2+$val3+$val4;
}

//Appels
$resultat1=somme(2,3);
$x=23;
$resultat2=somme(2,3,$x);
$resultat3=somme(2,5,$x,15);

//Traitements
echo "La somme est $resultat1<br>";
echo "La somme est $resultat2<br>";
echo "La somme est $resultat3<br>";


