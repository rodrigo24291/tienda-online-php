
<div class="container categoria">
    
    
   
    
    
    
<?php if (isset($_SESSION["error"]["general"])) :?>
    
    
    <div id="regi">Error en el registro</div>
    
    <?php endif ?>   
    <h2 class="text-center ticate">Nueva Categoria</h2>
    <div class="row">
        
        <div class="col-2"></div>
        <div class="col-8">
<div class="card ">

    <h5 class="card-header info-color white-text text-center ">
        <strong>Categoria</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">
        
        
        <form class="md-form" style="color: #757575;" method="POST" action="<?=base_url ?>categoria/save">

  <?php if (isset($_SESSION["nombre"])){ echo $_SESSION["nombre"];} ?>

            <input type="text" id="materialSaveFormName" class="form-control" name="nombre" placeholder="Nombre">
                    


                    <input class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Guardar">

        </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
    </div>
    </div>
<?php helpers::error(); ?>
