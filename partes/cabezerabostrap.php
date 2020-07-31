<?php include_once 'config/helpers.php'; ?>
<!doctype html>
<html lang="es">
  <head>
 <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?=base_url?>estilos.css">


    <title>Royal Ramos</title>
  </head>
  <body>
    
  
       
            <nav class="navbar navbar-expand-lg navbar-dark  pu fixed-top scrolling-navbar">
                <a class="navbar-brand" href="<?=base_url?>">Tus ramos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                      <a class="nav-link" href="<?=base_url?>">Inicio</a>
                    </li>
                    
                    
                    <li class="nav-item active">
                   
                       
                        <div class="dropdown">
                           
  <a class="nav-link" dropdown-toggle href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Productos
  </a>
 <?php $cate= helpers::categorias();
 
                     while($tes=$cate->fetch_object()):?>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="<?=base_url?>producto/productos&nombre=<?=$tes->nombre ?>&id=<?=$tes->id ?>"><?php echo $tes->nombre ?></a>
   
  </div>
                            <?php endwhile;?>
</div>
                        
                        
                      </li>
                    
                    
                    <li class="nav-item active">
                        <a class="nav-link" data-scroll href="#contacto">Contacto</a>
                      </li>
                    </ul>
<?php if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"]) ) :?>
                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url?>usuario/iniciosesion">
                            <img src="<?=base_url?>imagen/login.png " class="tamano mr-1">
                            Iniciar sesion</a>
                        
                    </li>

                    
                    <li class="nav-item active">
                      <a class="nav-link" href="<?=base_url?>usuario/registro"> <img src="<?=base_url?>imagen/sign.png" class="tamano mr-1"> Registrarse</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url?>carrito/carro"><img src="<?=base_url?>imagen/ca.png" class="tamano mr-2">Carrito</a>
                </li>

                </ul>
                    <?php elseif (isset($_SESSION["user"])) :?>
                    
                    <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        
                        
                        
                    </li>
                    
                    <li class="nav-item active"><a class="nav-link" href="<?=base_url?>carrito/carro"><img src="<?=base_url?>imagen/ca.png" class="tamano mr-2">Carrito (<?php $tl=  helpers::carrito();echo $tl["cantidad"] ?>) $<?php echo  $tl["total"]  ?></a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?=base_url?>pedidos/mos">Mis pedidos</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?=base_url?>usuario/cerrar">Cerrar cesion</a></li>
                    
                    </ul>
                 
                    <?php elseif (isset($_SESSION["admin"])) :?>
                    
                 <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="<?=base_url?>categoria/index">Categoria</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?=base_url?>producto/inicio">Productos</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Pedidos</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?=base_url?>usuario/cerrar">Cerrar cesion</a></li>
                </ul>
                    <?php endif; ?>
                </div>
              </nav>

                      
              


