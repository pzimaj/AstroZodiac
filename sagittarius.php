<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sagittarius</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Sagittarius</h1>
      <h5>The Optimistic</h5> 
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/saggittarius/sagittarius.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/fire.png" alt="" height="20" width="20"> Fire <em>(Mutable)</em></p>
              <p class="card-text"><strong>Color:</strong> Purple</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Jupiter</p>
              <p class="card-text"><strong>Symbol:</strong> The Archer</p>
              <p class="card-text"><strong>Birthstone:</strong> Turqoise</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/saggittarius/adventure.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Person on an adventure">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Sagittarius people are adventurous, optimistic, curious and cheerful. Sagittarians strive for discovery and change of scenery; 
                they are always looking for something new and exciting to discover. They are constantly searching. They are free spirits and a 
                great storyteller. Saggitarians are extremely optimistic.Even if something bad happens to them, they know that there is a light 
                at the end of the tunnel and that they must reach it.
            </p>  
            <p class="card-text">
                Sagittarinas do not like to feel restricted adn especially bored. They always need to do something and be on the move. Settling 
                down for them is very hard, which could end being their enemy in the future.
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
                Sagittarius friends are very kind. They have no malice toward anyone in their friend group and you can always count on them 
                to be honest. They always say what they mean which could be both a good and a bad thing.
            </p>     
            <p class="card-text">
                In relationships, Sagittarians can't be bored. They need excitement and fun for them to stay with someone. They aren't very
                commited in relationships and are easily bored. However, their kindness and honesty are one of their best traits in 
                relationships.
            </p>     
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/saggittarius/adventure_together.jpg" class="card-img card-img-padding rounded-circle" alt="2 people looking into the horizon">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/saggittarius/travel_guide.jpg" class="card-img card-img-padding rounded-circle" alt="A travel guide">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Sagittarians are adventurous, they would be great at jobs that have to do with travelling and storytelling.
            </p>          
            <span>Best careers for Sagittarians:</span>
            <ul>
              <li>Travelling agent</li>
              <li>Writer</li>
              <li>Salesperson</li>
              <li>Enterprenuer</li>
            </ul>   
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Sagittarius</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/saggittarius/brad.jpg" class="d-block w-100" alt="Brad Pitt">
            <div class="carousel-caption">
              <h4 class="astro-font">Brad Pitt</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/saggittarius/billie.jpg" class="d-block w-100" alt="Billie Eilish">
            <div class="carousel-caption">
              <h4 class="astro-font">Billie Eilish</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/saggittarius/jake.jpg" class="d-block w-100" alt="Jake Gyllenhaal">
            <div class="carousel-caption">
              <h4 class="astro-font">Jake Gyllenhaal</h4>
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
  </body>
</html>