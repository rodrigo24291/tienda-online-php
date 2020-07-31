<?php 
include_once 'modelo/categoria.php';
class categoriacontroller{
        
    function insertar(){

                helpers::is_adm();
        include_once 'view1/categoria/nueva categoria.php';
    }
    
    
    function save(){
        if(isset($_POST["nombre"])){
            
            $nombre=$_POST["nombre"];
            
            if(empty($nombre)){
                
              
                $_SESSION["nombre"]="inserte un nombre";
            header("location:".base_url."categoria/insertar");    
                
            }
            
            
            
            
            else{
                
                $po=new categoria();
                $po->setNombre($nombre);
                $wer=$po->guardar();       
            
                if($wer){
                
                
                header("location:".base_url."categoria/index");
            }
            
            else{$_SESSION["error"]["general"]="error en la coneccion ";
            
            header("location:".base_url."categoria/insertar");
            }
                
            }
            
            
              }
              
              else {$_SESSION["error"]="error al crear la categoria ";
              
              header("location:".base_url."categoria/insertar");
              }
        
 
        
 
 

    }
    
    function borrar(){
        
        if(isset($_GET)){
            
            $id=$_GET["id"];
            
            
            
            $re=new categoria();
            
            $re->delete($id);
            
            
            
    }
    header("location:".base_url."categoria/index");
    
        }
        
        function index(){
            helpers::is_adm();
            
            $et=new categoria();
            
           $de=$et->showcategoria();
            
           include_once 'view1/categoria/idex.php';
        }
    
    }
    
  
    
