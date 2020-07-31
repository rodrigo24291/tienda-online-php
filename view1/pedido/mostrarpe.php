<div class="container tabla">
    <h2 class="text-center my-5">Mis pedidos</h2>
    
    <div class="row d-flex justify-content-center">
        
        
        <div class="col-12 col-md-10 col-8">
            
<table class="table">
    
  <thead class="black white-text">
    <tr>
      <th scope="col" class="text-center">Numero de pedido</th>
      <th scope="col" class="text-center">Estado</th>
      <th scope="col" class="text-center">Fecha</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php while ($qw=$lk->fetch_object()) :?> 
        <tr>
            <td class="text-center"><a href="<?=base_url?>pedidos/ge&id=<?= $qw->id ?>"><?= $qw->id ?></td>
            <td class="text-center"><?= $qw->estado ?></td>
            <td class="text-center"><?= $qw->fecha ?></td>
            
            
            
        
            
    
     
            
            
        </tr>
        
<?php endwhile; ?>    
  </tbody>
  
</table>
            
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





