


<div class="container tabla">
    <h2 class="text-center my-5">Categorias</h2>
    
    <div class="row">
        
        <div class="col-2"></div>
        <div class="col-8">
            <a href="<?=base_url ?>categoria/insertar" class="btn btn-info mb-4">CREAR CATEGORIA</a>
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col" class="text-center">ID</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Accion</th>
    </tr>
  </thead>
  <tbody>
      <?php while($po=$de->fetch_object()):?>
    <tr>
        <th scope="row" class="text-center"><?=$po->id;?></th>
      <td class="text-center"><?=$po->nombre;?></td>
      <td class="text-center">
          
          <a href="<?=base_url ?>categoria/borrar&id=<?php echo $po->id ?>" class="btn btn-info ">BORRAR</a>
      
      
      </td>
      
    
     
      </tr>
      <?php endwhile; ?>
  </tbody>
</table>
            </div>
        <div class="col-2"></div>
        </div>
    </div>