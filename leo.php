<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Leo</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Leo</h1>
      <h5>The Exuberant</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/leo/leo.png" class="card-img" alt="Leo symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/fire.png" alt="Fire symbol" height="20" width="20"> Fire <em>(Fixed)</em></p>
              <p class="card-text"><strong>Color:</strong> Gold and orange</p>
              <p class="card-text"><strong>Rulling Planet:</strong> The Sun</p>
              <p class="card-text"><strong>Symbol:</strong> The Lion</p>
              <p class="card-text"><strong>Birthstone:</strong> Ruby</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/leo/leos_being_leos.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="People jumnping">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Leo people are very theatrical, loyal, eccentric and passionate. They look at life as a stage, and they are the
                main character. They are the core of any social gathering and everyone's attention is drawn to them because of 
                their eccentric energy. They are similar to Pisces in that they're warm-hearted and find it hard to believe ill of others.
                However, as opposed to the timid Pisces, Leos show that emotion passionately and loudly. 
            </p>          
            <p class="card-text">
                While they are warm-hearted, their main love is themselves. They seek attention and they want people to notice them. 
                Leos care about what people think about them. They also seek people's admiration and love. They suffer silently because
                they don't want their flamboyant and eccentric image to fall apart.
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
                Leos are great friends. They stick up to people they care about and always come to help. Leos understand the power of
                socializing and are natural at it.
            </p>
            <p class="card-text">
                In relationships, if a Leo is truly in love with the other person, their loyalty knows no bounds. However, they need the partners
                full attention, otherwise Leos will not be impressed. 
            </p>           
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/leo/socializing.jpg" class="card-img card-img-padding rounded-circle" alt="People having fun and socializing">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/leo/leader.jpg" class="card-img card-img-padding rounded-circle" alt="People on a hill being led by one preson">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Leos are natural leaders and excel at any job that has a lot of socializing in it. They would also be great actors.
            </p>          
            <span>Best carrers for Leos:</span>
            <ul>
              <li>PR Executive</li>
              <li>CEO of a company</li>
              <li>Actor</li>
              <li>Motivational speaker</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Leo</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/leo/jk.jpg" class="d-block w-100" alt="J.K.Rowling">
            <div class="carousel-caption">
              <h4 class="astro-font">J.K.Rowling</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/leo/whitney.jpg" class="d-block w-100" alt="Whitney Houston">
            <div class="carousel-caption">
              <h4 class="astro-font">Whitney Houston</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/leo/chris.jpg" class="d-block w-100" alt="Chris Hemsworth">
            <div class="carousel-caption">
              <h4 class="astro-font">Chris Hemsworth</h4>
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