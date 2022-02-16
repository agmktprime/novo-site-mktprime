<?php
/*
Template name: Nova Home
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- FONT -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

<!-- TITLE -->
    
<title>Marketing Prime - Desenvolvimento de Sites</title>
</head>
<body>


<!-- HEADER -->
  <nav class="navbar col-12 m-auto navbar-expand-lg navbar-light bg-light text-uppercase ">
    <div class="container-fluid m-auto col-9">
      <a class="navbar-brand logo logo-desk font-weight-bold" href="/">
        <img src="https://mktprime.com/wp-content/uploads/2021/11/Marketing-Prime.svg"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="align-right navbar-nav me-auto mb-2 mb-lg-0 align-text-bottom">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              QUEM SOMOS
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Planos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Serviços
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">SEO</a></li>
              <li><a class="dropdown-item" href="#">Hospedagem Cloud</a></li>
              <li><a class="dropdown-item" href="#">Desenvolvimento de Sites</a></li>
              
              <li><a class="dropdown-item" href="#">Desenvolvimento de e-commerce</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex">
          
          <button class="btn btn-outline-success" type="submit">Fale Conosco</button>
        </form>
      </div>
    </div>
  </nav>
<!-- HEADER -->

<!-- BANNER ENTRADA -->
<div class="bg-image text-light" style="
background-image: url(https://mktprime.com/wp-content/uploads/2021/09/Componente-3-–-1.svg);
height: 700px;
background-repeat: no-repeat;
background-size: 100% auto;">
<div class="container col-9 position-relative top-20">
  <div class="row col-12 align-items-center align-self-center align-middle">
    <div class="col col-6 animated animatedFadeInUp fadeInUp">
      <h1>
        Criação de
Sites Profissionais
      </h1>
      <p>Terceirize a programação web da sua empresa, escolha a PRIME para cuidar de assuntos como programação de sites, ecommerce e hospedagem de sites.</p>
    </div>
    <div class="col col-6">
      <div class="img-100">
        <img src="https://mktprime.com/wp-content/uploads/2020/07/image-banner-home5-1.png"/>
      </div>
    </div>
  </div>
</div>
</div>

<!-- BANNER ENTRADA -->

<!-- TESTEMUNHOS -->


<!-- TESTEMUNHOS -->

<!-- FOOTER -->
<div class="container">
  <div class="row">
    <div class="col col-6">
    <p>Nossa história começa com uma conversa. E uma conversa pode se transformar em um resultado.</p>
    </div>
    <div class="col col-6">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>

<!--Section: Contact v.2-->
<section class="mb-4">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

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
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control">
                          <label for="email" class="">Your email</label>
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
                          <label for="subject" class="">Subject</label>
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
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>San Francisco, CA 94126, USA</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+ 01 234 567 89</p>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>contact@mdbdootstrap.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->





<!-- FOOTER -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="bootstrap.min.js"></script>

<script>

function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.querySelector('.status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.querySelector('.status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.querySelector('.status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.querySelector('.status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.querySelector('.status').innerHTML = "Sending...";
}

</script>


</body>
</html>
<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
