<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Libra</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Libra</h1>
      <h5>The Charming</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/libra/libra.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/oxygen.png" alt="" height="20" width="20"> Air <em>(Cardinal)</em></p>
              <p class="card-text"><strong>Color:</strong> Lavander</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Venus</p>
              <p class="card-text"><strong>Symbol:</strong> The Scales</p>
              <p class="card-text"><strong>Birthstone:</strong> Opal</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/libra/smile.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Woman smiling">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Libra people are best known for their charm and ability to listen to others. Libras strive for order and need everything
                to be clear and serene. They would do anything to keep peace and make the people around them feel comfortable. They 
                hate aggresion and conflict, hence why they want to protect the peace that they have.
            </p>          
            <p class="card-text">
                Libras always feel like there is something missing in their life. On the outside, they appear self-confident, but they actually 
                have a shaky self-confidence and are scared that people will find out something that they don't want others to know. Libras have 
                a hard time making decisions because they are scared of losing the peace and order that they have. They judge people by 
                appearance first(simmiliar to Gemini).
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
                Libras are very friendly and lovable. They are nice towards everyone and are always by your side. Actually, they can't 
                be alone at all. They always need someone by their side. Libras are the friends who will understand everything their friend has 
                to say and will listen to them when noone else will.
            </p>        
            <p class="card-text">
                To Libras, being in a relationship is like drinking water. They need love and to be with someone since they do not really work 
                well alone. They praise their partner and always give them affection. They also know everything about their partner
            </p>  
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/libra/sunset_love.jpg" class="card-img card-img-padding rounded-circle" alt="2 pairs of hands forming hearts">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/libra/guidance.jpg" class="card-img card-img-padding rounded-circle" alt="A picture fo a guidance coundelor">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Because of their need to bring peace, they would be great lawyers and social workers.
            </p> 
            <span>Best careers for Libras:</span>
            <ul>
              <li>Guidance Councelor</li>
              <li>Lawyer</li>
              <li>Human Recources</li>
              <li>Manager</li>
            </ul>      
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Libra</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/libra/smith.jpg" class="d-block w-100" alt="Will Smith">
            <div class="carousel-caption">
              <h4 class="astro-font">Will Smith</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/libra/lena.jpg" class="d-block w-100" alt="Lena Headey">
            <div class="carousel-caption">
              <h4 class="astro-font">Lena Headey</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/libra/hugh.jpg" class="d-block w-100" alt="Hugh Jackman">
            <div class="carousel-caption">
              <h4 class="astro-font">Hugh Jackman</h4>
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