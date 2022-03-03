<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Taurus</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center text-color astro-font title-top">
      <h1>Taurus</h1>
      <h5>The Dependable</h5>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/taurus/taurus.png" class="card-img" alt="Taurus symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/cave.png" alt="" height="20" width="20"> Earth <em>(Fixed)</em></p>
              <p class="card-text"><strong>Color:</strong> Pale blue</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Venus</p>
              <p class="card-text"><strong>Symbol:</strong> The Bull</p>
              <p class="card-text"><strong>Birthstone:</strong> Emerald</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/taurus/calm.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="A picture of a calm woman">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
              Taurus people are cosidered very dependable, determined and patient. People tend to rely on Taurus' because
              of their determination and perserverence towards a goal. They have a calm and collected demeanor and are not 
              easily offended. Taurus' are extremely organized and they give very helpful advice. 
            </p>   
            <p class="card-text">
              The main take-away about Taurus' is that they are very stubborn. They need order, otherwise they get anxious
              if things get out of control. When they do get offended, they become extremely sensitive (like they were holding
              all their emotions and let them out all at once). 
            </p>       
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Relationships</h2>
            <p class="card-text">
              They have a small number of really good friends as opposed to a lot of aquatinces. Friends of Taurus' depend
              a lot on them when it comes to career and school advice.
            </p>  
            <p class="card-text">
              Taurus' are very loyal to their partner and would want nothing more than to spend their time with them, alone,
              in their house. Taurus' have a hard time expressing their feelings towards their partner, even though they love them.
              They are very sentimentel, even though they do not show it. 
            </p>        
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/taurus/coffee.jpg" class="card-img card-img-padding rounded-circle" alt="A picture of 2 people having coffee">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/taurus/executive.jpg" class="card-img card-img-padding rounded-circle" alt="Serious person working">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Because of their organized way of life, Taurus' are very succesfull in many career paths.
            </p>  
            <span>Best careers for Taurus':</span>
            <ul>
              <li>Executive in  a company</li>
              <li>Attorney</li>
              <li>Politician</li>
              <li>Doctor</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Taurus</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/taurus/remi.jpg" class="d-block w-100" alt="Remi Malek">
            <div class="carousel-caption">
              <h4 class="astro-font">Remi Malek</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/taurus/adele.jpg" class="d-block w-100" alt="Adele">
            <div class="carousel-caption">
              <h4 class="astro-font">Adele</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/taurus/george.jpg" class="d-block w-100" alt="George Clooney">
            <div class="carousel-caption">
              <h4 class="astro-font">George Clooney</h4>
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

    <?php include($footer);?>
      
    <!-- Optional JavaScript -->
    <?php include($javascript);?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts);?>
</html>