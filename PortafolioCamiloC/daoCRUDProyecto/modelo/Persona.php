<?php
class Persona{
private $id_persona;
private $nombre;
private $apellido;
private $telefono;
private $correo;
private $contrasena;

function __construct($id_persona,$nombre,$apellido,$telefono,$correo,$contrasena){
    $this->id_persona=$id_persona;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->telefono=$telefono;
    $this->correo=$correo;
    $this->contrasena=$contrasena;
}
//id
function getNumeroIdentificacion() {
    return $this->id_persona;
}

function setNumeroIdentificacion($id_persona) {
    $this->id_persona = $id_persona;
}

//nombre
function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

//apellido

function getApellido() {
    return $this->apellido;
}

function setApellido($apellido) {
    $this->apellido = $apellido;
}

//telefono

function getTelefono() {
    return $this->telefono;
}

function setTelefono($telefono) {
    $this->telefono = $telefono;
}

//correo

function  getCorreo() {
    return $this->correo;
}

function  setCorreo($correo) {
    $this->correo = $correo;
}

//contraseña

function  getContrasena() {
    return $this->contrasena;
}

function  setContrasena($contrasena) {
    $this->contrasena = $contrasena;
}
}