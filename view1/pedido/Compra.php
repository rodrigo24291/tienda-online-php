<div class="container registro">
    <h2 class="text-center my-5">Comprar producto</h2>
    
    <div class="row d-flex justify-content-center">

    <div class="col-12 col-md-10 col-8">
<form class="border border-light p-5" method="post" action="<?=base_url ?>pedidos/save">

    <p class="h4 mb-4 text-center">Pedidos</p>

    <label for="textInput">Provincia</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="provincia" name="provincia">

    <label for="textInput">Localidad</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Localidad" name="localidad">

    <label for="textInput">Dirección</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Dirección" name="direccion">

    <input class="btn btn-info btn-block my-4" type="submit" value="Comprar" />
    

    
</form>
    
    </div>
    </div>
    
    </div>