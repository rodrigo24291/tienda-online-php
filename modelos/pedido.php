<?php

include_once 'config/config.php';
class pedido extends configuracion{
        private $provincia;
        private $localidad;
        private $direccion;
        private $costo;
        private $estado;
        private $usuarioid;
        public $db;
        private $producto;
        private $unidades;
                
        
        function __construct() {
            return $this->db= configuracion::db();
        }
                
        function getUnidades() {
            return $this->unidades;
        }

        function setUnidades($unidades) {
            $this->unidades = $unidades;
        }

                function getUsuarioid() {
            return $this->usuarioid;
        }

        function setUsuarioid($usuarioid) {
            $this->usuarioid = $usuarioid;
        }


                
        function getProducto() {
            return $this->producto;
        }

        function setProducto($producto) {
            $this->producto = $producto;
        }

        
        
        function getProvincia() {
            return $this->provincia;
        }

        function getLocalidad() {
            return $this->localidad;
        }

        function getDireccion() {
            return $this->direccion;
        }

        function getCosto() {
            return $this->costo;
        }

        function getEstado() {
            return $this->estado;
        }

        function setProvincia($provincia) {
            $this->provincia = $provincia;
        }

        function setLocalidad($localidad) {
            $this->localidad = $localidad;
        }

        function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        function setCosto($costo) {
            $this->costo = $costo;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }
        
        
        function save(){
            
            $sql="insert into pedidos values(null,{$this->getUsuarioid()},'{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}',{$this->getCosto()},'confirmado',curdate(),null)";
            $this->db->query($sql);
           
        }
        
        function save_lineas(){
            
            $sql="SELECT LAST_INSERT_ID() as 'pedido'";
            $tr=$this->db->query($sql);
            $lo = $tr->fetch_object()->pedido;
            
            foreach ($_SESSION["carrito"] as $de){
                
                $uy="insert into lineas_pedidos values(null,$lo,{$de['id']},{$de['cantidad']})";
            $td=$this->db->query($uy);
           
            }
            
            
        
            
        }
        function getpedido($id){
                
                $sql="select * from pedidos where usuario_id=$id order by id desc limit 1";
            $td=$this->db->query($sql);
           
            
           $fer= $td->fetch_object();
           
           
            return $fer;
                
            }
            
            function dameproductos($id){
//                $sql="select * from productos where id in(select producto_id from lineas_pedidos where pedido_id=$id)";
                $sql="select p.nombre, p.precio,p.imagen, lp.unidades from productos p inner join lineas_pedidos lp on p.id=lp.producto_id where pedido_id=$id";
                
                
                $td=$this->db->query($sql);
                
                $fer= $td;
                return $fer;
            }
            function showall($id){
                $sql="select * from pedidos where usuario_id=$id order  by id desc";
                $td=$this->db->query($sql);
               
                $fer= $td;
                return $fer;
            }
            
            function showpedi($id){
               
                $sql="select * from pedidos where id=$id";
            $td=$this->db->query($sql);
           $tre=$td->fetch_object();
            

           
           
            return $tre;
            }
            
            

}





