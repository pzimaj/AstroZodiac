<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Gemini</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center text-color astro-font title-top">
      <h1>Gemini</h1>
      <h5>The Responsive</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/gemini/gemini.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/oxygen.png" alt="" height="20" width="20"> Air <em>(Mutable)</em></p>
              <p class="card-text"><strong>Color:</strong> Yellow</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Mercury</p>
              <p class="card-text"><strong>Symbol:</strong> The Twins</p>
              <p class="card-text"><strong>Birthstone:</strong> Agate</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/gemini/knowledge.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="A girl with a book on her head">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Gemini people are considered intelligent, adaptable and communicative. They are in constant search of
                knowledge and tend to be big multi-taskers. They always like to focus on multiple things rather than 
                on one thing. They are very enthusiastic about the things they love and they love to show that.
            </p>  
            <p class="card-text">
                Because they focus on multiple things, they tend to only scratch the surface rather than delve deep into one thing.
                Because they absorb information quickly, They tend to judge people way too quickly without knowing their deeper qualities.
                They can come off as very egotistic because they do talk about themselves and their experiences a lot.
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
                Geminis have a lot of friends and they can easily lift up their friends from a dark place. They can have amazing
                coversations and they don't shy away from talking about deeper and darker themes. They are very fun to be around
                and they tend to attract many people with their wit and enthusiasm.
            </p>          
            <p class="card-text">
                They easily get into relationships with people because of their curiosity. Geminis love debating and it can get
                very intense. For that reason, they are considered very annoying in a relationship to some, since they love showing 
                their knowledge. Their best match-up is Saggitarius, since they are both curious they compement each other.
            </p>
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/gemini/talking.jpg" class="card-img card-img-padding rounded-circle" alt="Girls talking an laughing">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/gemini/teacher.jpg" class="card-img card-img-padding rounded-circle" alt="A picture fo a teacher">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Since Gemini people are very intelligent, they would be great in an educational field or even journalism because of
              their curiousness.
            </p>   
            <span>Best carrers for Geminis:</span>
            <ul>
              <li>Teacher</li>
              <li>Writer</li>
              <li>Journalist</li>
              <li>Comedian</li>
              <li>Marketing Manager</li>
            </ul>      
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Gemini</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/gemini/angelina.jpg" class="d-block w-100" alt="Angelina Jolie">
            <div class="carousel-caption">
              <h4 class="astro-font">Angelina Jolie</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/gemini/morgan.jpg" class="d-block w-100" alt="Morgan Freeman">
            <div class="carousel-caption">
              <h4 class="astro-font">Morgan Freeman</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/gemini/tom.jpg" class="d-block w-100" alt="Tom Holland">
            <div class="carousel-caption">
              <h4 class="astro-font">Tom Holland</h4>
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