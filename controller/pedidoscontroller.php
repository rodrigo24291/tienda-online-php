<?php
include_once 'modelo/pedido.php';
class pedidoscontroller{
    
    function index(){
        
        include_once 'view1/pedido/compra.php';
    }
    
    
    function save (){
        
            
        if(isset($_POST)){
           $provincia= isset($_POST["provincia"])? $_POST["provincia"]:FALSE;
           $localidad= isset($_POST["localidad"])?$_POST["localidad"]:FALSE;
           $direccion= isset($_POST["direccion"])?$_POST["direccion"]:FALSE;
           
            
           $error=array();
           
           if(empty($provincia)|| is_numeric($provincia) || preg_match("/[0-9]/",$provincia)  ){
               
               $error["provincia"]="provincia invalida";
               
               
           }
           
             if(empty($localidad)|| is_numeric($localidad) || preg_match("/[0-9]/",$localidad)  ){
               
               $error["localidad"]="localidad invalida";
          
           
        }
          if(empty($direccion)  ){
               
               $error["direccion"]="direccion invalido";
        
    }
    $usuarioid=$_SESSION["user"]->id;
     $coste= helpers::carrito();
     $costo=$coste["total"];
     

if(count($error)==0){
    $we=new pedido();
    $we->setProvincia($provincia);
    $we->setDireccion($direccion);
    $we->setLocalidad($localidad);
    $we->setCosto($costo);
    $we->setUsuarioid($usuarioid);
    
    
    
    $re=$we->save();
    $il=$we->save_lineas();
    
    if($il && $re){
        header("location:".base_url."pedidos/procesados");
        
    }
    
    else{$_SESSION["error"]["general"]="error en el registro";}
    
}

 else {
    $_SESSION["error"]=$error;
}
header("location:".base_url."pedidos/procesados");
}
 


    
}
function procesados(){
    
    if (isset($_SESSION["user"])){
        $id=$_SESSION["user"]->id;
        
    $tre=new pedido();
    $iou=$tre->getpedido($id);
    $id_pedido=$iou->id;   
    $po=$tre->dameproductos($id_pedido);
    
    include_once 'view1/pedido/procesado.php';
    }
}

function mos(){
    if(isset($_SESSION["user"])){
        
        $id=$_SESSION["user"]->id;
        
        $pq=new pedido();
      $lk=  $pq->showall($id);
    
      include_once 'view1/pedido/mostrarpe.php';  
      
    }
    
    
    
 


        }
        
           function ge(){
        if(isset($_GET)){
            $id_pedido=$_GET["id"];
            $tl=new pedido();
            $iou=$tl->showpedi($id_pedido);
            
    
   
      $tre=new pedido();
    $po=$tre->dameproductos($id_pedido);
    
    include_once 'view1/pedido/procesado.php';
        
     
      
            
            
        }
        
    }
    
}
        
        
    
    


