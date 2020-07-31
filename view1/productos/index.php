<div class="container tabla">
    <h2 class="text-center my-5">Productos</h2>
    
    <div class="row d-flex justify-content-center">
        
        
        <div class="col-12 col-md-10 col-8">
            <a href="<?=base_url ?>producto/registro" class="btn btn-info mb-4">CREAR PRODUCTO</a>
<table class="table">
    <?php if(isset($_SESSION["completo"])){echo $_SESSION["completo"]; } ?>
    
    <?php if(isset($_SESSION["error"]["general"])){echo $_SESSION["error"]["general"]; } ?>
  <thead class="black white-text">
    <tr>
      <th scope="col" class="text-center">ID</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Precio</th>
      <th scope="col" class="text-center">Stock</th>
      <th scope="col" class="text-center">Imagen</th>
      <th scope="col" class="text-center">Acción</th>
      
    </tr>
  </thead>
  <tbody>
     <?php while($po=$de->fetch_object()):?>
        <tr>
            <td class="text-center"><?=$po->id;?></td>
            <td class="text-center"><?=$po->nombre;?></td>
            <td class="text-center"><?=$po->precio;?></td>
            <td class="text-center"><?=$po->stock;?></td>
            <td class="text-center"><img src="<?=base_url?>imagen/<?=$po->imagen?>" ></td>
            
            
            <td><a href="<?=base_url?>producto/delete&id=<?php echo $po->id ?>" class="btn btn-info mb-4">Eliminar</a></td>
            
    
     <?php endwhile; ?>
            
            
        </tr>
        
    
  </tbody>
</table>
            </div>
        <div class="col-2"></div>
        </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
</body>
</html>

<?php helpers::error(); ?>