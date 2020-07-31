<div class="container tabla">
    <h2 class="text-center my-5">Tu pedido ha sido procesado</h2>
    
    <div class="row d-flex justify-content-center">
        
        
        <div class="col-12 col-md-10 col-8">
            <p>
		Tu pedido ha sido guardado con exito, una vez que realices la transferencia
		bancaria a la cuenta 7382947289239ADD con el coste del pedido, será procesado y enviado.
	</p>
<table class="table">
    
  <thead class="black white-text">
    <tr>
      <th scope="col" class="text-center">Numero de pedido</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Precio</th>
      <th scope="col" class="text-center">Producto</th>
      <th scope="col" class="text-center">Unidades</th>
      <th scope="col" class="text-center">Total a Pagar</th>
      
    </tr>
  </thead>
  <tbody>
     <?php while($py=$po->fetch_object()):?>
        <tr>
            
            <td class="text-center"><?= $iou->id ?></td>
            
            
            <td class="text-center"><?=$py->nombre;?></td>
            <td class="text-center"><?= $py->precio ?></td>
            <td class="text-center"><img src="<?=base_url ?>imagen/<?=$py->imagen?>" ></td>
            
            <td class="text-center"><?= $py->unidades ?></td>          
    
     <?php endwhile; ?>
            <td class="text-center"><strong><?= $iou->coste ?></strong></td>
            
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

 <?php helpers::decarrito() ?>