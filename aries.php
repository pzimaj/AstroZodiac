<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Aries</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center text-color astro-font title-top">
      <h1>Aries</h1>
      <h5>The courageous</h5>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/aries/aries.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/fire.png" alt="Flame image" width="20" height="20"> Fire<em>(Cardinal)</em></p>
              <p class="card-text"><strong>Color:</strong> Red</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Mars</p>
              <p class="card-text"><strong>Symbol:</strong> The Ram</p>
              <p class="card-text"><strong>Birthstone:</strong> Diamond</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aries/lively.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Excentric girl jumping">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
              Aries people are mostly described as exciting, vibrant, confident and talkative. Socialising is 
              very important to them; they are natural conversation-starters and they never shy away from saying what they personally think, 
              even though they can get in trouble for that. When they set a goal, they pursue it with enthusiasm.   
            </p>       
            <p class="card-text">
              They have a very aggressive and combative spirit and also tend to be very reckless with their decisions. 
              They are short-tempered, impatient and tend to have childish tantrums whenever something doesn't go their way. Even though 
              they pursue their goals, if success isn't immediately evident, they easily give up.
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
              They are generous and openhearted friends that tend to help their friends whenever they need the help.
              Aries people highly value the time they spend with their friends.
            </p>          
            <p class="card-text">
              When it comes to love, they are passionate and seek adventure. They usually like the chase more than the outcome.
              They tend to like people who are eccentric and fun like them. Their best match is Libra, who are also social, like 
              Aries, but can be very flirtatious.
            </p>
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aries/eccentric.jpg" class="card-img card-img-padding rounded-circle" alt="Couple dancing">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aries/athlete.jpg" class="card-img card-img-padding rounded-circle" alt="Athletes">
        </div>
        <div data-aos="fade-up" class="col-md-8">
          <div class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Aries people are very courageous and can make quick decisions with which they can excel in many dangerous jobs.
            </p>
            <span>Best carrers for Aries:</span>
            <ul>
              <li>Enterprenuer</li>
              <li>Proffesional athlete</li>
              <li>Pilot</li>
              <li>Marine</li>
              <li>Brain Surgeon</li>
            </ul>       
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Aries</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/aries/Marvel-Robert-Downey-Jr.jpg" class="d-block w-100" alt="Robert Downey Jr.">
            <div class="carousel-caption">
              <h4 class="astro-font">Robert Downey Jr.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/aries/mariah.jpg" class="d-block w-100" alt="Mariah Carey">
            <div class="carousel-caption">
              <h4 class="astro-font">Mariah Carey</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/aries/lady_gaga.jpg" class="d-block w-100" alt="Lady Gaga">
            <div class="carousel-caption">
              <h4 class="astro-font">Lady Gaga</h4>
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