
<div class="container registro">
    <h2 class="text-center ticate">Nuevo Producto</h2>
    <div class="row  d-flex justify-content-center">
        
        <div class="col-10 col-sm-5 col-md-5 col-lg-6">

<form class="border border-light p-5" method="post" action="<?=base_url ?>producto/save" enctype="multipart/form-data">

    <p class="h4 mb-4 text-center">Registrar Producto</p>
<?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "nombre");} ?>
    <label for="textInput">Nombre</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Nombre" name="nombre">
<?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "descripcion");} ?>
    <label for="textarea">Descripción</label>
    <textarea id="textarea" class="form-control mb-4" placeholder="Descripción" name="descripcion"></textarea>
<?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "precio");} ?>
    <label for="textInput">Precio</label>
    <input type="number" id="textInput" class="form-control mb-4" placeholder="Precio" name="precio">
    
    
  <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "stock");} ?>
    <label for="stock">Stock</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Stock" name="stock">

    
    <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"],"imagen");}?>
    
    <div class="input-group mb-4">
         
        <div class="input-group-prepend">
             
            <span class="input-group-text">Examinar</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput" name="imagen">
            <label class="custom-file-label" for="fileInput">Seleccione Imagen</label>
        </div>
    </div>

    <select class="browser-default custom-select mb-4" id="select" name="id">
        <?php $te=helpers::categorias();while($ye=$te->fetch_object()) :?>
        
        <option value="<?= $ye->id ?>"> CATEGORIA: <?=$ye->nombre?>  </option>
        <?php endwhile; ?> 
        
    </select>

    <input class="btn btn-info btn-block my-4" type="submit" value="Agregar">

    
</form>
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