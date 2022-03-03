<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Astrozodiac</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <?php include($icons);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scroll()">
    <?php include($navigation)?>

    <div class="parallax-image-index">
      <div class="card-img-overlay button">
        <a href="#beginning" class="btn btn-primary btn-lg active button-color" role="button" aria-pressed="true">Click to discover</a>
      </div>
    </div>

    <div id="beginning">
        <!-- I put a div here so that when the buttons is pressed it scrolls down before the welcome text. -->
    </div>

    <div class="text-center text-color astro-font title-top">
      <h4>Welcome to</h4>
      <h1>Astrozodiac</h1>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="text-center mt-5 text-color">
      <p>Discover your zodiac sign and in turn more about yourself.</p>
      <p>Even if you're not a believer, there is still fun and mystery to unravel!</p>
    </div>

    <div data-aos="fade-up" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/star-man.jpg" class="d-block w-100" alt="Man looking at stars">
          <div class="carousel-caption">
            <h4 class="astro-font">Discover</h4>
            <p>Find out more about yourself and others.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/globe.jpg" class="d-block w-100" alt="A globe with constellations on it">
          <div class="carousel-caption">
            <h4 class="astro-font">Learn</h4>
            <p>Learn about the mysterious world of astrology.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/star-girl.jpg" class="d-block w-100" alt="Woman looking at stars">
          <div class="carousel-caption">
            <h4 class="astro-font">Have fun</h4>
            <p>Gives you interesting topics to talk about.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div data-aos="fade-up" class="video">
      <iframe src="https://www.youtube.com/embed/xySfvsY2eiw" allowfullscreen></iframe>
    </div>

    <?php include($footer);?>

    <!-- Optional JavaScript -->
    <?php include($javascript);?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts);?>
  </body>
</html>