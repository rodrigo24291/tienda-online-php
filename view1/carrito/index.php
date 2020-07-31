

 <?PHP if (isset($_SESSION["carrito"])):?>
     
     <?php $re=$_SESSION["carrito"]?>

<div class="container tabla">
    <h2 class="text-center my-5">Productos</h2>
    
    <div class="row d-flex justify-content-center">
        
        
        <div class="col-12 col-md-10 col-8">
            
<table class="table">
    
  <thead class="black white-text">
    <tr>
      <th scope="col" class="text-center">Imagen</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Precio</th>
      <th scope="col" class="text-center">Cantidad</th>
      <th scope="col" class="text-center">Subtotal</th>
      <th scope="col" class="text-center">Total</th>
      
    </tr>
  </thead>
  <tbody>
     
        <?PHP $WR=NULL?>
    <?php foreach ($_SESSION["carrito"] as $de=> $te):?>
        <tr>
            <td class="text-center"><img id="ima_c" src="<?=base_url ?>imagen/<?= $te["imagen"]?>"></td>
            <td class="text-center"><?=$te["nombre"];?></td>
            <td class="text-center"><?=$te["precio"];?></td>
            <td class="text-center"><?=$te["cantidad"];?></td>
            <td class="text-center"><?=$te["cantidad"]*$te["precio"];?></td>
            
            
         <?PHP $WR+=$te["cantidad"]*$te["precio"] ?>
                      
        
       <?php endforeach; ?>
            
            <td><strong><?= $WR?></strong></td>
            
    
     
            
            
        </tr>
        
    
  </tbody>
  
</table>
            <a href="<?=base_url ?>pedidos/index" class=" d-inline-flex  justify-content-center btn btn-primary">Confirmar pedido</a>
            <?php else :?>
     
            <h2 class="registro text-center">Carrito vacio</h2>
            <hr>
     
     
     
    <?php endif; ?>
            </div>
        
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
