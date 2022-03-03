<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Capricorn</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Capricorn</h1>
      <h5>The Steady</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/capricorn/capricorn.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/cave.png" alt="" height="20" width="20"> Earth <em>(Cardinal)</em></p>
              <p class="card-text"><strong>Color:</strong> Dark green</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Saturn</p>
              <p class="card-text"><strong>Symbol:</strong> The Goat</p>
              <p class="card-text"><strong>Birthstone:</strong> Garnet</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/capricorn/serious.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="A woman workin tirelessly">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Capricorn are ambitious, patient and desire succes in life. They're great organizers and leaders. They're very smart and are able to 
                extremely concentrate and grasp ideas quickly, which makes them a great asset in a job enviorenment. They are reliable and they
                always stick to their word. Capricorns are very smart and cautious with money, which adds to their great planning abilities. 
                Capricorn are great and reliable leaders, especially in a job enviorenment.  They do not plunge into situations without 
                carefully thinking about the outcomes. 
            </p>          
            <p class="card-text">
                Capricorns have a tendency to come off as cold and unaproachable. They have a hard time depending on others for help and usually
                only depend on themselves. Capricorns are also very hard on themselves.
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
                Capricorns as friends are reliable and honest. Even though they don't look like it, they are sympathetic people and are 
                always there to help a sad friend. People gravitate toward Capricorns because of their unique sense of humor. They have a dark 
                sense of humor that makes fun of serious situations which to some is very funny, while others mught find it disstastefull.
            </p>          
            <p class="card-text">
                It's very hard for Capricorns to fall in love easily. You have to become friends with them first for them to notice that 
                they may have feelings for you. They are amazing people to be in a long-term relationship with. They are very protective 
                of their partner and have a tendency to plan evrything out without telling them. It takes time for Capricorns to completely 
                open up to someone.
            </p>
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/capricorn/funny.jpg" class="card-img card-img-padding rounded-circle" alt="People laughing at a joke">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/capricorn/serious_work.jpg" class="card-img card-img-padding rounded-circle" alt="People seriously working">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
                Capricorns are succesfull in jobs that have to do with a lot of organization, money management and numbers.
            </p>          
            <span>Best career paths for Capricorns:</span>
            <ul>
              <li>Accountant</li>
              <li>Programmer</li>
              <li>Director</li>
              <li>Scientist</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Capricorn</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/capricorn/Michelle-Obama.jpg" class="d-block w-100" alt="Michelle Obama">
            <div class="carousel-caption">
              <h4 class="astro-font">Michelle Obama</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/capricorn/Kit-Harington.jpg" class="d-block w-100" alt="Kit Harington">
            <div class="carousel-caption">
              <h4 class="astro-font">Kit Harington</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/capricorn/jim.jpg" class="d-block w-100" alt="Jim Carrey">
            <div class="carousel-caption">
              <h4 class="astro-font">Jim Carrey</h4>
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