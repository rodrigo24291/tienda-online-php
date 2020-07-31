<?php
include_once 'config/config.php';
class producto extends configuracion{
        private $nombre;
        private $id;
        private $precio;
        private $stock;
        private $descripcion;
        private $imagen;
        public $db;
                function __construct() {
            $this->db= configuracion::db();
        }
        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }

                function getNombre() {
            return $this->nombre;
        }

        function getPrecio() {
            return $this->precio;
        }

        function getStock() {
            return $this->stock;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getImagen() {
            return $this->imagen;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setPrecio($precio) {
            $this->precio = $precio;
        }

        function setStock($stock) {
            $this->stock = $stock;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }
        function save(){
            $sql="insert into productos values(null,{$this->id},'{$this->nombre}','{$this->descripcion}',{$this->precio},{$this->stock},null,curdate(),'{$this->imagen}')";
            
            $coneccion=$this->db->query($sql);
            
            if($coneccion){
                
                $re=true;
            }
            
            else{
                $re=false;
            }
            return $re;
        }

        function sacarTodos(){
            $sql="select * from productos";
            $coneccion=$this->db->query($sql);
            
            return $coneccion;
        }
        
        function deleteOne($id){
            $sql="delete from productos where id=$id";
            $coneccion=$this->db->query($sql);
        }
        
        function sacarUno($id){
            $sql="select * from productos where id=$id";
            $coneccion=$this->db->query($sql);
            
            $ue=$coneccion->fetch_object();
            
            return $ue;
        }
        function sacarCate($id){
            $sql="select * from productos where categoria_id=$id";
            $coneccion=$this->db->query($sql);
            
            $ue=$coneccion;
            
            return $ue;
        }
        
        function sacarAlgunos(){
            $sql="select * from productos ORDER BY RAND()
 limit 3";
            $coneccion=$this->db->query($sql);
            
            return $coneccion;
            
        }
        
        
}

