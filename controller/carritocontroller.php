<?php

include_once 'modelo/producto.php';
include_once 'config/helpers.php';
class carritoController extends producto {
    
    function carro(){
        
        
        include_once 'view1/carrito/index.php';
        
    }
    
    function guardadCompras(){
        
        
        if(isset($_GET["id"]) && isset($_SESSION["user"])){
        $id=$_GET["id"];
        
        
      
        $ye=new producto();
        $di=$ye->sacarUno($id);
        
        
        
        
        if(isset($_SESSION["carrito"]) && isset( $_SESSION["carrito"][$id])){
            $_SESSION["carrito"][$id]["cantidad"]++;
            header("location:".base_url."carrito/carro")
    ;}
    
    else{$_SESSION["carrito"][$id]=array("imagen"=>$di->imagen,"id"=>$di->id, "nombre"=>$di->nombre,"precio"=>$di->precio,"cantidad"=>1,"producto"=>$di);}
        header("location:".base_url."carrito/carro");
    }
    else{header("location:".base_url."usuario/niciosesion");}
    
    }
            

    
}