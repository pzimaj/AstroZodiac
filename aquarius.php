<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Aquarius</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Aquarius</h1>
      <h5>The Friendly</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color pad-card mt-5 aries-width">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/images/aquarius/aquarius.png" class="card-img" alt="Aries symbol">
          </div>
          <div class="col-md-8">
            <div class="card-body mt-5">
              <p class="card-text"><strong>Element:</strong> <img src="assets/images/oxygen.png" alt="" height="20" width="20"> Air <em>(Fixed)</em></p>
              <p class="card-text"><strong>Color:</strong> Electric blue</p>
              <p class="card-text"><strong>Rulling Planet:</strong> Uranus</p>
              <p class="card-text"><strong>Symbol:</strong> The Water Bearer</p>
              <p class="card-text"><strong>Birthstone:</strong> Amethyst</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aquarius/unique.jpg" class="card-img card-img-padding card-img-size rounded-circle" alt="A person with a dog">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Personality</h2>
            <p class="card-text">
                Aquarius people are unique, witty and unconventional. They are their own authentic self and they don't let anyone change 
                that; they do not let anyones opinions change theirs. They are kind and care about the world around them. They are curious 
                beings that want to figure out the reason for everything. They are independent and need their own personal time, but that 
                doesn't mean they don't enjoy the company of others. They are always willing to help others and causes they believe in.
            </p>     
            <p class="card-text">
                Aquarius' believe that their ideas and opinions are probably true, which raises a problem when someone doesn't agree with them. 
                When that happens, they become agressive and have a tendency to drive people away from them. When that happens, they just 
                need alone time to cool off. They do not like to say that they're wrong.
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
                Aquarius' always make their friends laugh and people like having them around. They make friends easily and can have a 
                convorsation with anyone. Aquarius' can deal with all kinds of personalities all at once. The best thing about their friendship 
                is that they make the people around them be themselves.
            </p>          
            <p class="card-text">
                For an Aquarius to be in a relationship with someone, they need to be best friends with them first. They do not like 
                to be constrained or tied in a relationship, and if they do feel like that, they will leave them in an instant. 
            </p>
          </div>
        </div>
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aquarius/friends.jpg" class="card-img card-img-padding rounded-circle" alt="A group of friends watching the sunset">
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card mb-3 bg-transparent text-color card-horizontal-width personality-card">
      <div class="row no-gutters">
        <div data-aos="fade-down-right" class="col-md-4">
          <img src="assets/images/aquarius/science.jpg" class="card-img card-img-padding rounded-circle" alt="A scientist">
        </div>
        <div class="col-md-8">
          <div data-aos="fade-up" class="card-body">
            <h2 class="card-title astro-font">Career</h2>
            <p class="card-text">
                Because Aquarians love to find out the inner workings of things and to help others, they would be great in 
                both scientific and humanitarian work.
            </p>          
            <span>Best careers for Aquarius'</span>
            <ul>
              <li>Political Activist</li>
              <li>Physicist</li>
              <li>Judge</li>
              <li>Social Worker</li>
              <li>Scientist</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <h2 class="text-color popular-title astro-font">Popular Aquarius</h2>

    <div id="carouselExampleCaptions" class="carousel slide celebrity-carasouel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/aquarius/shakira.jpg" class="d-block w-100" alt="Shakira">
            <div class="carousel-caption">
              <h4 class="astro-font">Shakira</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/aquarius/harry.jpg" class="d-block w-100" alt="Harry Styles">
            <div class="carousel-caption">
              <h4 class="astro-font">Harry Styles</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/aquarius/jenny.jpg" class="d-block w-100" alt="Woman looking at stars">
            <div class="carousel-caption">
              <h4 class="astro-font">Jennifer Anniston</h4>
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