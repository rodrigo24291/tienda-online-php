
<div class="container registro ">
<div class="row d-flex flex-wrap justify-content-center">
    <?php while($de=$te->fetch_object()) :?>
  <div class=" col-10 col-sm-5 col-md-5 col-lg-3 my-4">
    <div class="card">
        
        <img src="<?=base_url?>imagen/<?=$de->imagen ?>" >
       
      <div class="card-body">
        <h5 class="card-title"><?= $de->nombre ?></h5>
        <p class="card-text"><?=$de->descripcion ?></p>
        <p class="card-text"><?=$de->stock ?> unidades</p>
        <p class="card-text"><?=$de->precio?></p>
        <a href="<?=base_url?>carrito/guardadCompras&id=<?=$de->id?>" class="btn btn-primary">COMPRAR</a>
      </div>
    </div>

  </div>
    
<?php endwhile; ?>    
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
