<?php
include_once 'config/helpers.php';
include_once 'modelo/usuario.php';
class usuariocontroller extends usuario{
    function iniciosesion(){
        
        include_once 'view1/usuario/iniciarsession.php';
    }
    
    function registro (){
        include_once 'view1/usuario/registrarse.php';
        
    }
    
    
    function save(){
        if(isset($_POST)){
           $nombre= isset($_POST["nombre"])? $_POST["nombre"]:FALSE;
           $apellido= isset($_POST["apellido"])?$_POST["apellido"]:FALSE;
           $email= isset($_POST["email"])?$_POST["email"]:FALSE;
           $pasword= isset($_POST["pasword"])?$_POST["pasword"]:FALSE;
           $telefono=isset($_POST["pasword"])?$_POST["pasword"]:FALSE; 
           $error=array();
           
           if(empty($nombre)|| is_numeric($nombre) || preg_match("/[0-9]/",$nombre)  ){
               
               $error["nombre"]="nombre invalido";
               
               
           }
           
             if(empty($apellido)|| is_numeric($apellido) || preg_match("/[0-9]/",$apellido)  ){
               
               $error["apellido"]="apellido invalido";
          
           
        }
          if(empty($email)  ){
               
               $error["email"]="email invalido";
        
    }
    
      if(empty($pasword)){
               
               $error["pasword"]="pasword invalido";
    
}

if(count($error)==0){
    $we=new usuario();
    $we->setApellidos($apellido);
    $we->setNombre($nombre);
    $we->setEmail($email);
    $we->setPasword($pasword);
    $re=$we->guardar();
    
    if($re){
        $_SESSION["completo"]="registro guardado";
        
    }
    
    else{$_SESSION["error"]["general"]="error en el registro";}
    
}

 else {
    $_SESSION["error"]=$error;
}
}
    
header("location:".base_url."usuario/registro");  
}


function iniciar(){
    
    if(isset($_POST)){
           $email= isset($_POST["email"])? $_POST["email"]:FALSE;
           $pasword= isset($_POST["pasword"])?$_POST["pasword"]:FALSE;
           
           $error=array();
        if(empty($email)){
            
            $error["email"]="inserte un email";
            
        }
        
        if(empty($pasword)){
            
            $error["pasword"]="inserte un pasword ";
            
        }
        
        
        
        if(count($error)==0){
            
            $ye=new usuario();
            $ye->setEmail($email);
            $ye->setPasword($pasword);
            
            $oe=$ye->comprobar();
           
        if(is_object($oe) ){
            
            $wer=$oe->rol;
            if($wer=="admin"){
            $_SESSION["admin"]=$oe;}
            
            else{
                $_SESSION["user"]=$oe;
                
            }
           header("location:".base_url."producto/medio");
    }
    else{$_SESSION["error"]["general"]="error al conectarse";
    header("location:".base_url.'usuario/iniciosesion');}
    
            }
    
    else{$_SESSION["error"]=$error;    
    header("location:".base_url.'usuario/iniciosesion');}
        
        }
}

function cerrar(){
    
    session_destroy() ;
    header("location:".base_url."usuario/iniciosesion");
    
    
}
}



