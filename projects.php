
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yazzie Web Design</title>

    <?php require_once 'lib/partials/head-utils.php'; ?>


    <!-- Custom styles for this template -->
    <link href="lib/css/album.css" rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link" href="projects.php">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading" style="font-family:'Oswald';font-weight:300;">MY PORTFOLIO</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc.
          Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Check out our Projects</a>
          <a href="contact.php" class="btn btn-secondary">Contact us</a>
        </p>
      </div>
    </section>

    <div id="masonry">
        <img src="lib/images/firstSite.JPG" class="img-fluid">
        <img src="lib/images/basics.JPG" class="img-fluid">
        <img src="lib/images/java2.JPG" class="img-fluid">
        <img src="lib/images/Javascript.JPG" class="img-fluid">
        <img src="lib/images/quiz.JPG" class="img-fluid">
        <img src="lib/images/general.png" class="img-fluid">
        <img src="lib/images/restaurant.JPG" class="img-fluid">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/7.jpg" class="img-fluid">
    </div>


    <footer class="footer">
        <div class="container">
            <span class="text-muted">Yazzie Web Design &copy; Copyright 2017</span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="lib/js/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="lib/js/holder.min.js"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
    <script src="lib/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="lib/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
