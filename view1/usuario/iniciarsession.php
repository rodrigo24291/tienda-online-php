<!-- Default form login -->
<div class="container registro ">
    
    <div class="row d-flex justify-content-center ">
        
        
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 shadow-lg p-3 mb-5 bg-white rounded">
<form class="text-center  p-5" method="POST" action="<?=base_url?>usuario/iniciar">

    <p class="h4 mb-4">Iniciar sesion</p>
 <?php if (isset($_SESSION["error"]["general"])) :?>
    
    <div id="regi">Error al conectarse</div>
    
    <?php endif ?>
    <!-- Email -->
    <?php if (isset($_SESSION["error"])){echo helpers::errores($_SESSION["error"], "email");} ?>
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <?php  if (isset($_SESSION["error"])){    echo  helpers::errores($_SESSION["error"],"pasword");} ?>
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="pasword">

    <div class="d-flex justify-content-around">
       
        <div>
            <!-- Forgot password -->
            <a href="">Olvide mi pasword?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <input class="btn btn-info btn-block my-4" type="submit" value="Iniciar sesion">

    <!-- Register -->
    <p>No estas registrado?
        <a href="<?=base_url ?>usuario/registro">Registrate</a>
    </p>

   

</form>
<!-- Default form login -->
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

<?php helpers::error(); ?>