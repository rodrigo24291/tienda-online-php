<?php
include_once 'modelo/categoria.php';
include_once 'modelo/usuario.php';
class helpers extends categoria{
    public static function errores($error,$campo){
        $te="";
        
        if(isset($error)&& isset($error[$campo])){
            $te=$error[$campo];
            
        }
        return $te;
    }
    
    public static function error(){
        $borrar=true;
        if (isset($_SESSION["completo"])){
            
            unset( $_SESSION["completo"]);
        }
        
        if (isset($_SESSION["error"])){
            
            unset  ($_SESSION["error"]);
        }
        
        if (isset($_SESSION["error"]["general"])){
            
            unset ($_SESSION["error"]["general"]);
        }
        
        if (isset($_SESSION["nombre"])){
            
            unset ($_SESSION["nombre"]);
        }
        
      
        
        return $borrar;
        
    }
    
    public static function decarrito(){
          if(isset($_SESSION["carrito"]))
            {
            
            unset ($_SESSION["carrito"]);
        }
        
    }

    public static function  categorias(){
             
        $te=new categoria();
       $re= $te->showcategoria();
        
        return $re;
    }
    

public static function is_adm (){
    
    if(isset($_SESSION["admin"])){
        
        $mancha=TRUE;
    }
    
    else{ header("location:index.php");}
    
    return $mancha;
}

public static function is_user (){
    
    if(isset($_SESSION["user"])){
        
        $mancha=TRUE;
    }
    
    else{ header("location:index.php");}

return $mancha;}
 
public static function carrito(){
    
    $we=0;
    $ou=0;
    if(isset($_SESSION["carrito"])){
        
        foreach ($_SESSION["carrito"] as $de=> $te){
            
            $we+=$te["cantidad"]*$te["precio"];
            
            $ou+=(int)$_SESSION["carrito"][$de];   
            }
        }
        $pe=array("cantidad"=>$ou,"total"=>$we );
        
        return $pe;
    }
    
    
}



