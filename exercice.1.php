<?php
//**une fonction qui initialise et affiche un tablaeu d entier*
//
?>
<?php
 $tableau=[12,34,5,678,66];
function liste_tableau($tableau)
    {
    foreach ($tableau as $value)

    echo $value;
    echo '<br />';
    }
    

?>

<?php

//**-une fonction qui verifie si un elememt est present dans un tableau ou pas 

define("MAX",56);
define("MIN",2);
$val=rand(MAX,MIN);

function list_tableau($tableau)
    {
    foreach ($tableau as $value)
     {
    }

    echo $value;
    echo '<br />';
    }


?>
<?php
//**-une fonction qui transfrere dans nu tableau les valeurs pairs et dans un tableau t2 les valeurs impairs
//**-les tableaux t1 et t2 sont affiche

function list_tableau($tableau)
    {
    foreach ($tableau as $value){
        if($val%2==0){
            $tabp[]=$val;
                    }
        else{
            $tabImp[]=$val;
            }
    echo print_r($tabp);
    echo print_r($taImp);
    }
?>
     
    


