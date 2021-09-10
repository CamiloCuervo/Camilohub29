<?php 
include ('material.php');
class Revista extends Material{
     private $tema; 
     private $fechaPublicacion;
     private $LugarPublicacion;
     private $numeroEdicion;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$tema,$fechaPublicacion,$LugarPublicacion,$numeroEdicion){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->tema=$tema;
    $this->fechaPublicacion=$fechaPublicacion;
    $this->lugarPublicacion=$LugarPublicacion;
    $this->numeroEdicion=$numeroEdicion;
}
    function setTema($tema){
        $this->tema=$tema;
    }
    function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion=$fechaPublicacion;
    }
    function setLugarPublicacion($LugarPublicacion){
        $this->lugarPublicacion=$LugarPublicacion;
    }
    function setNumeroEdicion($numeroEdicion){
        $this->numeroEdicion=$numeroEdicion;
    }
    function getTema(){
        return $this->tema;
    }
    function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    function getLugarPublicacion(){
        return $this->lugarPublicacion;
    }
    function getNumeroEdicion(){
        return $this->numeroEdicion;
    }
}
$ob=new Revista('papel estucado','ISSN: 0035-791X','Jann Wenner, Ralph J. Gleason','Rolling Stone',1967,'Buen estado','música y la cultura popular','9 de noviembre de 1967','EEUU','25');
echo $ob->datos();
echo '<br>';
echo 'Tema: '.$ob->getTema();
echo '<br>';
echo 'Fecha de publicación: '.$ob->getFechaPublicacion();
echo '<br>';    
echo 'Lugar de publicacion: '.$ob->getLugarPublicacion();
echo '<br>';
echo 'Numero de edición: '.$ob->getNumeroEdicion();
echo '<br>';
?>