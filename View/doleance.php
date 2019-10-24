<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <link rel="stylesheet" href="Public/Css/style.css">
    <title>Doléance</title>
  </head>
  <body>

    <!-- https://mdbootstrap.com/docs/jquery/forms/contact/ -->
    <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Doléance</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Vous pouvez nous informer en cas de probléme ou de demande</p>

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
                              <label for="name" class="">Prénom</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="numero" class="form-control">
                              <label for="email" class="">Numéro</label>
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
                              <label for="message">Message</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class="text-center text-md-left">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
              </div>
              <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>SESAME Ambatoroaka</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>Educateur AP: 034 55 555 55</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>nom@gmail.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>

    </section>
    <!--Section: Contact v.2-->
  </body>
</html>
