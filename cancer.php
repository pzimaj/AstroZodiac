<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cancer</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center text-color astro-font title-top">
      <h1>Cancer</h1>
      <h5>The Loyal</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/cancer/cancer.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/sea.png" alt="" height="20" width="20"> Water <em>(Cardinal)</em></p>
              <p class="card-text"><strong>Color:</strong> Sea green</p>
              <p class="card-text"><strong>Rulling Planet:</strong> The Moon</p>
              <p class="card-text"><strong>Symbol:</strong> The Crab</p>
              <p class="card-text"><strong>Birthstone:</strong> Pearl</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/cancer/sad.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Sad person looking at sea">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Cancer people are complex, moody, sensitive, caring and loyal. At their best they are caring and helpful, but at their worst,
                they are cranky and unnaproachable. Sometimes they are extroverted and easy to talk to, but sometimes, they are introverted
                and hard to get a hold of. 
            </p>  
            <p class="card-text">
                They are very loyal to the people that are good to them and they value family 
                the most out of any sign. On the outside, they seem strong, but on the inside, they are extremely sensitive and prone to 
                feeling bad about themselves.
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
        <div data-aos="fade-up" class="col-md-8">
          <div class="card-body">
            <h2 class="card-title astro-font">Reationships</h2>
            <p class="card-text">
                Their friendships are deep and thourough. They can make anyone feel understood and loved. Their best friends are other Water
                signs like Pisces and Scorpio, because they understand their moodiness and self-deprication.
            </p>          
            <p class="card-text">
                When it comes to love, Cancers seek a relationship where they can feel understood. They are easy to please since allthey want
                is for someone to listen to their problems so they don't have to bottle them up inside. Their best match is Pisces, since
                Pisces people are very in-tune with other peoples' emotions.
            </p>
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/cancer/understood.jpg" class="card-img card-img-padding rounded-circle" alt="2 people comforting each other">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/cancer/baker.jpg" class="card-img card-img-padding rounded-circle" alt="A person making macaroons">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Because of their nurturing tendencies, they would be very good at jobs thet would make customers happy.
            </p>  
            <span>Best carrers for Cancers:</span>    
            <ul>
              <li>Baker</li>
              <li>Real Estate Agent</li>
              <li>Preschool Teacher</li>
            </ul> 
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Cancer</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/cancer/tom-hanks.jpg" class="d-block w-100" alt="Tom Hanks">
            <div class="carousel-caption">
              <h4 class="astro-font">Tom Hanks</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/cancer/diana.jpg" class="d-block w-100" alt="Princess Diana">
            <div class="carousel-caption">
              <h4 class="astro-font">Pricess Diana</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/cancer/robinwilliamsinline.jpg" class="d-block w-100" alt="Robin Williams">
            <div class="carousel-caption">
              <h4 class="astro-font">Robin Williams</h4>
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