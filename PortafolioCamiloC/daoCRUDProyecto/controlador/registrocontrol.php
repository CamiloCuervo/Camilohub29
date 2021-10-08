<?php 
 require('../dao/DaoPersonaImpl.php');
$dao=new DaoPersonaImpl();
//$dao->registrar($a);
 //echo '........'.var_dump($dao);
require('../vista/index.php');
?>