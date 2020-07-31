
    
<img src="<?=base_url?>imagen/3.png" class="w-100" >
    
    
    
    <div class="container registro ">
    <h2 class="text-center catego">Algunos de nuestros productos</h2>
<div class="row d-flex flex-wrap justify-content-center">
    <?php while($de=$productos_ramdom->fetch_object()) :?>
    
  <div class=" col-10 col-sm-5 col-md-5 col-lg-3 my-4">
    <div class="card">
        
        <img src="<?=base_url ?>imagen/<?=$de->imagen ?>" >
       
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


    <hr>


<div class="container my-4" id="contacto">
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactate con nosotros</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Tienes alguna pregunta? Por favor no dude en contactarnos . Nuestro equipo le devolvera  el mensaje en cuestión de horas para  poder ayudarlo.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Nombre</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Objeto del mensaje</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Tu mensaje</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Cordoba capital</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+54 351 7065643</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>rodrigoespinosa24@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</div>

    
           <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4 wow fadeInUp">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> Royal Ramos</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
              
               </section>
                  
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>

<script>
new wow().init();
var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>