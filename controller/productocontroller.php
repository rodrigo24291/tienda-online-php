<?php 
include_once 'modelo/producto.php';
include_once 'config/helpers.php';
class productocontroller{
   
    function index(){
        $te=new producto();
        $productos_ramdom=$te->sacarAlgunos();
    include_once 'partes/index.php';
        
    }
    
            
    
    
    function registro () {
        helpers::is_adm();
        include_once 'view1/productos/nuevo producto.php';}
    
function save(){
    if(isset($_POST)){
        
        
        $nombre= isset($_POST["nombre"])? $_POST["nombre"]:FALSE;
        $descripcion= isset($_POST["descripcion"])?$_POST["descripcion"]:FALSE;
           $precio= isset($_POST["precio"])?$_POST["precio"]:FALSE;
           $stock= isset($_POST["stock"])?$_POST["stock"]:FALSE;
           $categoria=isset($_POST["id"])?$_POST["id"]:FALSE;;
            $imagen= isset($_FILES["imagen"])?$_FILES["imagen"]:FALSE;
           
           $error=array();
           
           if(empty($nombre)  ){
               
               $error["nombre"]="Invalido";
               
               
           }
           
            if(empty($imagen)  ){
               
               $error["Imagen"]="Invalida Imagen";
               
               
           }
           
             if(empty($descripcion) ){
               
               $error["descripcion"]="Invalida";
          
           
        }
          if(empty($precio) || !is_numeric($precio)  ){
               
               $error["precio"]="Invalido";
        
    }
    
      if(empty($stock) || !is_numeric($stock)){
               
               $error["stock"]="Invalido";
    
}

$type=$imagen["type"];
$name=$imagen["name"];

if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png" || $type=="image/gift" ){
    
    if(!is_dir("imagen")){
        
    mkdir("imagen",0777);
    move_uploaded_file($imagen["tmp_name"], "imagen/$name");
    }
   else{ move_uploaded_file($imagen["tmp_name"], "imagen/$name");}
}

else{$error["imagen"]="Formato de imagen no valido";}

if(count($error)==0){
    $we=new producto();
    $we->setDescripcion($descripcion);
   $we->setNombre($nombre);
   $we->setPrecio($precio);
   $we->setStock($stock);
   $we->setId($categoria);
   $we->setImagen($name);
    $re=$we->save();
    
    
    if($re){
        header("location:".base_url."producto/inicio");
        
    }
    
    else{$_SESSION["error"]["general"]="error en el registro";
    header("location:".base_url."producto/registro");
    
    }
    
}

 else {
    $_SESSION["error"]=$error;
    header("location:".base_url."producto/registro");
}
}
    
;  
}

function inicio(){
    
    helpers::is_adm();
    
    
    $pe=new producto();
    $de=$pe->sacarTodos();
    
    include_once 'view1/productos/index.php';
}

function delete(){
    $id=$_GET["id"];
    
    $tre=new producto();
    $tre->deleteOne($id);
    if($tre){
        $_SESSION["completo"]="Producto eliminado";
        header("location:".base_url."producto/inicio");
    }
    
    else{$_SESSION["error"]["general"]="El producto no se puede borrar "
            . "por que hay pedido en colas";
        
        header("location:".base_url."producto/inicio");
    }
    header("location:".base_url."producto/inicio");
}


function medio(){
    
    $si=new producto();
    $te=$si->sacarTodos();
    include_once 'partes/medionew.php';
}

function productos (){
   $id =$_GET["id"];
   $nombre =$_GET["nombre"];
    $si=new producto();
    $te=$si->sacarCate($id);
    
    include_once 'view1/productos/productosid.php';
}




    }


    

