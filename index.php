<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yazzie Web Design</title>

<?php require_once 'lib/partials/head-utils.php'; ?>

  </head>

  <body>

    <div>
      <h2 class="title text-center hidden-md-down">Yazzie Web Design is here</h2>
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
          <li class="nav-item active">
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
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="mt-3">
        <h1 style="font-family:'Oswald';font-weight:300;">Hello!</h1>
      </div>
      <p class="lead">My name is <strong>Dana Yazzie</strong>,
        and I'm a junior web developer from
        Bloomfield, New Mexico.
        I instruct at Cultivating Coders.
        I am also working as a software developer.
        </p>
      <p>A little more about me...</p>
      <p>I love being outdoors and of course running and walking.</p>
      <p>AND, I love coding.</p>
    </div>

    <?php require_once 'footer.php'; ?>

    <?php require_once 'lib/partials/scripts.php'; ?>

  </body>
</html>
