<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Astrozodiac</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scroll()">
    <?php include($navigation)?>

    <div class="parallax-image-rubrics">
      <div class="card-img-overlay button">
        <a href="#beginning" class="btn btn-primary btn-lg active button-color" role="button" aria-pressed="true">Discover Rubrics</a>
      </div>
    </div>

    <div id="beginning">
        <!-- I put a div here so that when the buttons is pressed it scrolls down before the welcome text. -->
    </div>

    <div class="text-center text-color astro-font title-top">
      <h1>The Rubrics</h1>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">JavaScript</h2>
      <p class="card-text">
        My JavaScript component changes the navbar when the page is scrolled on a certain distance.
        Also, on the <em>What Are You?</em> page, You can input Your birthday and You will get the 
        zodiac sign you belong to. If it doesn't show up right away, just scroll a little bit down.
      </p>       
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">DHTML</h2>
      <p class="card-text">
        The DHTML is a GIF image on the footer that, when button is pressed, the image moves. The GIF image
        is spaced themed just like the page and it goes well with the theme.
      </p>       
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">Extra</h2>
      <p class="card-text">
        I used the AOS library which adds animations to elements when scrolling the page. It is implemented in
        almost every page except rubrics and references. The elements start to show when the page loads.
      </p>       
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">Functionality</h2>
      <p class="card-text">
        <strong>Content:</strong> Complete with good thoughts.
      </p>  
      <p class="card-text">
        <strong>Navigation:</strong> You can tell where you are and where you can go. Simple but fits the theme.
      </p>  
      <p class="card-text">
        <strong>Organization:</strong> Nicely organized, logical.
      </p>  
      <p>
        <strong>Design:</strong> Follows principle and color scheme is constant throughout the page.
      </p> 
      <p>
        <strong>PHP/CSS:</strong>Organized well.
      </p>
    </div>
    
    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">Style</h2>
      <p class="card-text">
        For the look of the web page I decided I would use purple and darker colors to emphasise the space theme of the page. Astrology 
        has to do with stars and constolations, so that's why I decided to use a background that has stars on it.
      </p>       
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">Home</h2>
      <p class="card-text">
        Home is just the front page of the site that has some information about the purpose of the site and what you can do in it. I decided 
        to put a carasouel in it to add more to the page instead of it being just simple text.
      </p>         
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">What are you?</h2>
      <p class="card-text">
        This page contains multiple cards with images and simple info for every zodiac sign. Here the user can find his/her zodiac sign by 
        using their date of birth and search for the zodiac sign that contains that date in the interval.
      </p>         
    </div>

    <div class="card-body text-color rubrics-cards">
      <h2 class="card-title astro-font">Horoscopes</h2>
      <p class="card-text">
        For more info about all of the zodiac signs, the user can enter any page of any of the 12 signs through <em>What are you?</em>
        page or from the dropdown menu item <em>Horoscopes</em>. Each of the 12 pages have a simmiliar look but different pictures based 
        on the signs character and personality. The pictures are rounded so that they resemble planets. On every zodiac sign page I added
        pictures of celebrities so that the user has a refrence on what that zodiac sign is like.  
      </p>         
    </div>

    <?php include($footer);?>
    
    <!-- Optional JavaScript -->
    <?php include($javascript);?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts);?>
  </body>
</html>