<?php
include('persona.php');
//aplicar camell case
class Aprendiz extends persona{
    private $nombre;
    private $documento;
    private $ficha;

function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
    parent::__construct($ciudad,$telefono);
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->ficha=$ficha;
//echo"soy el constructor y me activaron <br>";       
}    

function setter($atributo,$valor){
    $this->$atributo=$valor;
}
// function setNombre($nombre){
//     $this->nombre=$nombre;
// }
// function setDocumento($documento){
//     $this->documento=$documento;
// }
// function setFicha($ficha){
//     $this->ficha=$ficha;
// }

function getter($atributo){
    return $this->$atributo;
}

function getDocumento(){
    return $this->documento;
}
function getNombre(){
    return $this->nombre;
}
function getFicha(){
    return $this->ficha;
}
}
$ob=new Aprendiz('Pedro',10129654,2142329,'Bogota',3115987624);

echo $ob->getDocumento();
echo '<br>';
echo $ob->getNombre();
echo '<br>';
echo $ob->getFicha();
$ob->setter("documento",77777);
$ob->setter("nombre","Carlos Vives");
$ob->setter("ficha",2237756);
echo $ob->datos();
// $ob->setDocumento(123456);
// $ob->setNombre("Pedro Infante");
// $ob->setFicha(2142329);
echo '<br>';
echo $ob->getter("documento");
echo '<br>';
echo $ob->getter("nombre");
echo '<br>';
echo $ob->getter("ficha");
// echo $ob->getDocumento();
// echo '<br>';
// echo $ob->getNombre();
// echo '<br>';
// echo $ob->getFicha();
//var_dump($ob);
// $num=10;
// $real=1.5;
// $cadena="Yo amo la programación";
// $vec=[1,2,3,4,5];
// var_dump($num);
// echo '<br>';
// var_dump($real);
// echo '<br>';
// var_dump($cadena);
// echo '<br>';
// var_dump($vec);
?>