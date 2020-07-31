<?php
include_once 'config/config.php';

class categoria extends configuracion{
    
    private $nombre;
    
    public $db;
    
    
    function __construct() {
        $this->db= configuracion::db();
    
        
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

            
    
    
    function guardar(){
        
        $sql="insert into categorias values(null,'{$this->nombre}')";
        $coneccion= $this->db->query($sql);
        
        if($coneccion){
            $cone=true;
            
        }
        
        else{$cone=true;}
        
        return $cone;
    }
    
    function showcategoria(){
        $sql="select * from categorias";
        $coneccion= $this->db->query($sql);
        
       
       
        
        return $coneccion;
    }
    
    function delete($id){
        $sql="delete from categorias where id=$id";
        
        $coneccion= $this->db->query($sql);
    }
    
}

