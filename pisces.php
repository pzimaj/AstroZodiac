<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pisces</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Pisces</h1>
      <h5>The Compassionate</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/pisces/pisces.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/sea.png" alt="" height="20" width="20"> Water <em>(Mutable)</em></p>
              <p class="card-text"><strong>Color:</strong> Turqoise</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Neptune</p>
              <p class="card-text"><strong>Symbol:</strong> The Two Fishes</p>
              <p class="card-text"><strong>Birthstone:</strong> Aquamarine</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/pisces/kind.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="A kind person helpi ng the homeless">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Pisces are compasionate, sensitive and empathetic people. They have a mystical quality to them that is hard to explain. 
                They care about the people around them and feel extreme empathy towards people who are suffering in some way. They are 
                curious beings who like to explore the mysterious qualities of this world. They are unselfish and ready to help anyone
                in need. Pisces are sensitive beings, but they always get back up from a slump and do not back away easily. Pisces are 
                also known for their amazing adaptabilty in any situation. They are extremely in tune with their and others emotions, 
                and can read a room very easily.
            </p>          
            <p class="card-text">
                Pisces have very low self-esteem and are very hard on themselves. They are very artistic, but their laziness doesn't let them 
                to express that fully. They tend to change how they feel frequently. Also, Pisces tend to think that people don't want them 
                around or that they're annoying. They like to work alone. A lot of Pisces get easily addicted to things.
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
                Pisces as friends is when they truly shine. They know every one of their friends and know every detail about their 
                personality. Pisces will think of their friends happiness before their own, which is hard to believe, but it's true. 
                People are drawn to pisces because of their nurturing, witty and happy energy. However, once you get to know them, you
                realise that they're not that happy.
            </p>  
            <p class="card-text">
                Pisces are the text-book definition of a person in love. They love small things like flowers and accesories. They are not the 
                jealous type and they will always be on their partners side. People might find that Pisces are too much of a goody two-shoes,
                but to some that might be a good thing
            </p>        
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/pisces/love.jpg" class="card-img card-img-padding rounded-circle" alt="2 people in love">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/pisces/psychologist.png" class="card-img card-img-padding rounded-circle" alt="Picture fo a child psychologist">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
                Pisces would be great in jobs that help other people with their emotions, or in jobs where there is a lot of searching 
                and discovering.
            </p>          
            <span>Best careers for Pisces:</span>
            <ul>
              <li>Psychologist</li>
              <li>Astronaut</li>
              <li>Pharmacist</li>
              <li>Nurse</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Pisces</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/pisces/steve.jpg" class="d-block w-100" alt="Steve Jobs">
            <div class="carousel-caption">
              <h4 class="astro-font">Steve Jobs</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/pisces/Rihanna.jpg" class="d-block w-100" alt="Rihanna">
            <div class="carousel-caption">
              <h4 class="astro-font">Rihanna</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/pisces/einstein.jpg" class="d-block w-100" alt="Albert Einstein">
            <div class="carousel-caption">
              <h4 class="astro-font">Albert Einstein</h4>
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