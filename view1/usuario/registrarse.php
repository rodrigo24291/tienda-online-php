<!-- Material form register -->
<!-- Default form register -->
<div class="container registro ">

    <div class="row d-flex justify-content-center ">
        
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 shadow-lg p-3 mb-5 bg-white rounded">

            <form class="text-center  p-5"  method="POST" action="<?=base_url?>usuario/save">

                <p class="h4 mb-4">Registrarse</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                         <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "nombre");} ?>
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Primer nombre" name="nombre">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                         <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "apellido");} ?>
                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
                </div>

                <!-- E-mail -->
                 <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "email");} ?>
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

                <!-- Password -->
                 <?php if (isset($_SESSION["error"])){ echo helpers::errores($_SESSION["error"], "pasword");} ?>
                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pasword">
                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    Puedes escribir letras y numeros
                </small>

                <!-- Phone number -->
                <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Numero de telefono" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Opcional
                </small>

                
                <!-- Sign up button -->
                <input class="btn btn-info my-4 btn-block" type="submit" value="Registrarse">

                
                <hr>

                <!-- Terms of service -->
                <p>Haciendo click en
                    <em>Registrarse</em> tu estas aceptando nuestro 
                    <a href="" target="_blank">Terminos y condiciones</a>

            </form>
            <!-- Default form register -->
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

