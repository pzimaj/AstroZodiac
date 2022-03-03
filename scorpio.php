<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Scorpio</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Scorpio</h1>
      <h5>The Idealist</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/scorpio/scorpio.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/sea.png" alt="" height="20" width="20"> Water <em>(Fixed)</em></p>
              <p class="card-text"><strong>Color:</strong> Maroon</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Pluto</p>
              <p class="card-text"><strong>Symbol:</strong> The Scorpion</p>
              <p class="card-text"><strong>Birthstone:</strong> Topaz</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/scorpio/mysterious.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Person staring of into the distance">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Scorpio people are intense and deep. They always look forward and think about what they are going to say and how they will 
                approach any situation. They jump from being passionate and independent to weak and clinging. They can easily control 
                any situation to their need. They look at everything from a deeper perspective and try to find hidden meaning in things.
                Scorpios are very good at argumenting and speaking their mind. They remember everything and they use that information for 
                their needs(most of the time).
            </p>          
            <p class="card-text">
                They always remember if someone has done something kind to them and repay them. However, they hold a grudge against any 
                person who did them wrong. Even though they might look cold on the outside, they are very sensitive and have very complex 
                emotions.
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
                Scorpios are very loyal friends. They remember every good deed their friends and people around them did for them and they give 
                it back. However, they also remember every bad deed and it's not easy for Scorpios to forget that. They can be very sarcastic 
                and have a mean sense of humor which to some people could be annoying.
            </p>      
            <p class="card-text">
                In relationships, Scorpios can be very jealous and possesive. Because they are so intense, relationships are all or nothing to 
                them. They are very loyal but they do not completely trust their partner.
            </p>    
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/scorpio/angry.jpg" class="card-img card-img-padding rounded-circle" alt="An angry couple">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/scorpio/detective.jpg" class="card-img card-img-padding rounded-circle" alt="A person using a magnifying glass to read">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Because Scorpios are very good at analysing and processing information, they would be very good in jobs that have to do 
              with handling and processing a lot of information
            </p>          
            <span>Best carrer paths for Scorpios</span>
            <ul>
              <li>Psychiatrist</li>
              <li>Researcher</li>
              <li>Detective</li>
              <li>Chemist</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Scorpio</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/scorpio/leonardo.jpg" class="d-block w-100" alt="Leonardo DiCaprio">
            <div class="carousel-caption">
              <h4 class="astro-font">Lonardo DiCaprio</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/scorpio/Katy.jpg" class="d-block w-100" alt="Katy Perry">
            <div class="carousel-caption">
              <h4 class="astro-font">Katy Perry</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/scorpio/jaq.jpg" class="d-block w-100" alt="Joaquin Pheonix">
            <div class="carousel-caption">
              <h4 class="astro-font">Joaquin Pheonix</h4>
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