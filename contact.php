<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yazzie Web Design</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://use.fontawesome.com/20ab91acc4.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="lib/css/style.css" rel="stylesheet">
    <link href="lib/css/sticky-footer-navbar.css" rel="stylesheet">

  </head>

  <body>

    <div>
      <h2 class="title text-center hidden-md-down">Yazzie Web Design</h2>
    </div>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand hidden-lg-up" href="#">Yazzie Web Design</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mx-auto listo">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="who.php">Who we are</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="offer.php">What we offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projects.php">Projects</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Begin page content -->
    <section id="contact">

  <h1 class="section-header">CONTACT</h1>

  <div class="contact-wrapper">

      <!----------------

      CONTACT PAGE LEFT

      ----------------->

    <form class="form-horizontal" role="form" method="post" action="contact.php">

      <div class="form-group">
        <div class="col-sm-12 bottomName">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12 bottomEmail">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>

      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>

      </button>

    </form>

      <!----------------

      CONTACT PAGE RIGHT

      ----------------->

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place"> GALLUP | NM</span></i></li>

          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(505) 906-5844</a></span></i></li>

          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">redcloudsaboveus01@gmail.com</a></span></i></li>

        </ul>

        <hr class="contact">
        <ul class="social-media-list">
          <li><a href="https://github.com/yazzied28" target="_blank" class="contact-icon">
            <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://twitter.com/Dayna_Saurr" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://www.instagram.com/yazzied28/" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr class="contact">

        <div class="copyright">&copy; 2016 ALL RIGHTS RESERVED</div>

      </div>

  </div>

</section>



    <?php require_once 'footer.php'; ?>

    <?php require_once 'lib/partials/scripts.php'; ?>

  </body>
</html>
