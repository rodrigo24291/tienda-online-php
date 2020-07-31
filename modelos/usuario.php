<?php
include_once 'config/config.php';
class usuario extends configuracion {
    
    private $nombre;
    private $apellidos;
    private $email;
    private $pasword;
    private $rol;
    private $imagen;
    public $db;
    function __construct() {
        $this->db= configuracion::db();
    }
            function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPasword() {
        return password_hash($this->db->real_escape_string($this->pasword),PASSWORD_BCRYPT,["cost"=>4]);
    }

    function getRol() {
        return $this->rol;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);;
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email); 
    }

    function setPasword($pasword) {
        $this->pasword = $pasword;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    
    function guardar(){
        $sql="insert into usuarios values(null,'{$this->nombre}','{$this->apellidos}','{$this->email}','{$this->getPasword()}','user',null)";
        $cone= $this->db->query($sql);
        
        return $cone;
    }
    
    function comprobar(){
        
        $email= $this->email;
        $password= $this->pasword;
        $sql="select * from usuarios where email='$email'";
        $coneccion=$this->db->query($sql);
        if($coneccion && $coneccion->num_rows==1){
            
            $de=$coneccion->fetch_object();
            $io=$de->password;
            
            $ue= password_verify($password, $io);
            if($ue){
            
            $yes=$de;
            
        }
        
        else{$yes=FALSE;}
        return $yes; 
    }


}
}