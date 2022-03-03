<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Virgo</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Virgo</h1>
      <h5>The Mindful</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/virgo/virgo.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/cave.png" alt="" height="20" width="20"> Earth <em>(Mutable)</em></p>
              <p class="card-text"><strong>Color:</strong> Navy blue and gray</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Mercury</p>
              <p class="card-text"><strong>Symbol:</strong> The Virgin</p>
              <p class="card-text"><strong>Birthstone:</strong> Sapphire</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/virgo/focus.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="Person working hard in a caffe">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Virgo people are organized, hardworking and analytical. They are the opposite of Gemini in the fact that they do not 
                leave anything unfinished, they must do what they intended to the end, perfectly. They are very intelligent and can detect 
                any flaw in a matter of seconds. They are very good problem solvers. They can handle any situation calmly and easily.
            </p>      
            <p class="card-text">
                Virgos are calm and collected on the outside but their inner mechanism doesn't let them get in touch with their inner emotions.
                They are constantly in denial about what they feel and are never sure how to express it. They hide their sorrow through their
                shell simmiliar to Cancer people. As opposed to Cancer, you can't tell when they ARE hiding something. Virgos are too critical
                of themselves. They need to do everything perfectly because if they don't, they start thinking that they failed which isn't great
                good for their self-asteem.
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
                Virgos are trustworthy friends. They are the go-to person that friends go to for any kind of advice. They create order out of
                confusion and are very easy to be around.
            </p>  
            <p class="card-text">
                Virgos in a relationship are the boss, the ones in charge of paying, spending, etc. That's not to say they're heartless. Virgos
                are devoted to their partner and would do anything to make them happy. A relationship with a Virgo is secure and loyal.
            </p>        
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/virgo/advice.jpg" class="card-img card-img-padding rounded-circle" alt="A person giving advice to someone">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/virgo/computer.jpg" class="card-img card-img-padding rounded-circle" alt="People working on a computer">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
              Because of their analytical mind, they would be great in jobs that have to do with numbers.
            </p>          
            <span>Best carrers for Virgos:</span>
            <ul>
              <li>Computer Scientist</li>
              <li>Accountant</li>
              <li>Statistician</li>
              <li>Nutricionist</li>  
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Virgo</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/virgo/beyonce.jpg" class="d-block w-100" alt="Beyonce">
            <div class="carousel-caption">
              <h4 class="astro-font">Beyonce</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/virgo/Keanu-Reeves.jpg" class="d-block w-100" alt="Keanu Reeves">
            <div class="carousel-caption">
              <h4 class="astro-font">Keanu Reeves</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/virgo/Zendaya.jpg" class="d-block w-100" alt="Zendaya">
            <div class="carousel-caption">
              <h4 class="astro-font">Zendaya</h4>
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