<?php
include('daoPersona.php');
include ('../conexion/conexion.php');
include ('../modelo/Persona.php');

class DaoPersonaImpl extends Conexion implements DaoPersona{
   
    
    public function registrar(Persona $a){ 
        try{
        if ($this->getCnx()!=null) {
        $id_persona=$a->getNumeroIdentificacion();
        $nombre=$a->getNombre();
        $apellido=$a->getApellido();
        $telefono=$a->getTelefono();
        $correo=$a->getCorreo();
        $contrasena=$a->getContrasena();
        $sql="insert into persona values(?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$id_persona,$nombre,$apellido,$telefono,$correo,$contrasena]);        
        } else {
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }    
    public function modificar(Persona $a){        
        $id_persona=$a->getNumeroIdentificacion();
        $nombre=$a->getNombre();
        $apellido=$a->getApellido();
        $telefono=$a->getTelefono();
        $correo=$a->getCorreo();
        $contrasena=$a->getContrasena();
        $stmt=$this->getCnx()->prepare("UPDATE persona " +
        "SET Identificacion =$id_persona," +
        "SET Nombre =$nombre," +
        "SET Apellido =$apellido," +
        "Telefono =$telefono," +
       "Correo = $correo" +
       "Contraseña =$contrasena,");
        $stmt->execute();        
    }

    public function eliminar(Persona $a){        
        $id_persona=$a->getNumeroIdentificacion();
        $stmt=$this->getCnx()->prepare("delete from persona where Documento=$id_persona");
        $stmt->execute();        
    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from persona");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Persona(null,null,null,null,null,null);
            $a->setNumeroIdentificacion($key['Id_persona']);
            $a->setNombre($key['Nombre']);
            $a->setApellido($key['Apellido']);
            $a->setTelefono($key['Telefono']);
            $a->setCorreo($key['Correo']);
            $a->setContrasena($key['Contraseña']);            
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoAprendizImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}
?>