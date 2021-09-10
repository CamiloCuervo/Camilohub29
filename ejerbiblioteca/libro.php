<?php 

include ('material.php');

class Libro extends Material{
    
     private $editorial; 
     private $numeroPaginas;
     private $numeroCapitulos;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status,$editorial,$numeroPaginas,$numeroCapitulos){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status);
    $this->editorial=$editorial;
    $this->numeroPaginas=$numeroPaginas;
    $this->numeroCapitulos=$numeroCapitulos;
}
    function setEditorial($editorial){        
        $this->editorial=$editorial;
    }
    function setnumeroPaginas($numeroPaginas){
        $this->numeroPaginas=$numeroPaginas;
    }
    function setnumeroCapitulos($numeroCapitulos){
        $this->numeroCapitulos=$numeroCapitulos;
    }
    function getEditorial(){
        return $this->editorial;
    }
    function getnumeroPaginas(){
        return $this->numeroPaginas;
    }
    function getnumeroCapitulos(){
        return $this->numeroCapitulos;
    }

    function getAutor(){
        return $this->autor;
    }
}
$ob=new Libro('papel','ISBN: 978-84-344-5363-0','Fernando Savater','Las preguntas de la vida',2008,'Buen estado','Editorial Ariel','316','10');
echo $ob->datos();
echo '<br>';
echo 'EDITORIAL: '.$ob->getEditorial();
echo '<br>';
echo 'NUMERO DE PAGINAS: '.$ob->getnumeroPaginas();
echo '<br>';    
echo 'NUMERO DE CAPITULOS: '.$ob->getnumeroCapitulos();
echo '<br>';
?>