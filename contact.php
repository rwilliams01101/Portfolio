<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>R. Alan Williams | Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <body>
    <!-- This is the beginning of the container, which holds R. Alan Williams (redirects to home) navigation bar and dropdown  -->
    <div class="text-center" class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Beginning of Navigation Bar -->
            <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #252729;">
                <a class="navbar-brand" href="index.html">R. Alan Williams</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Direct</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="https://www.gmail.com" target="_blank">Send an Email</a>
                            <a class="dropdown-item" href="https://www.linkedin.com/in/robertalanwilliams/" target="_blank">Connect on LinkedIn</a>
                            <a class="dropdown-item" href="https://github.com/rwilliams01101" target="_blank">Connect on GitHub</a>
                            </div>
                        </li>
                    </ul>
                </div>
              </nav>
            <!-- End of Navigation Bar -->
          </div>
        </div>
      </div>
      <!-- End of container -->
    
    <!-- This the jumbotron text just under Navigation Bar -->
    <div class="row">
      <figure class="col-sm">
       <div class="jumbotron jumbotron-fluid">
          <div class="text-center" class="container-fluid">
               <h1 class="display-3">Let's Talk</h1>
               <p class="lead">HTML | CSS | JavaScript</p>
          </div>
        </div>
      </figure>
   </div>
   <!-- End of jumbotron text -->

   <!-- Beginning of contact form -->
   <section class="mb-4">
  
    <h3 class="h1-responsive font-weight-bold text-center my-4">Do you have any questions?</h3>
    <p class="text-center w-responsive mx-auto mb-5">Tell me what you have in mind and I'll tell you how we can accomplish it.
        </p>
  
    <div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
        
               
                



            <form id="contact-form" name="contact-form" method="post" action="contact.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your Name</label>
                        </div>
                    </div>
  
                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your Email</label>
                        </div>
                    </div>
                </div>
               
  
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="submit" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your Message</label>
                        </div>
                    </div>
                </div>
                
  
            </form>
  
            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Minneapolis MN 55407 USA</p>
                </li>
  
                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>651-226-2043</p>
                </li>
  
                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>rwilliams01101@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>
  
  </section>
  <!-- End of contact form -->

  <!-- Break for footer -->
  <hr>
    
  <!-- Beginning of sticky footer -->  
    <footer class="container">
        <div class="row">
            <p class="col-sm">&copy; 2020 R. Alan Williams</p>
        </div>  
    </footer>

    <!-- Scripts needed for form and menus -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>