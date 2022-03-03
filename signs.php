<?php require("assets/php/configuration.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>What are you?</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scroll()">
    <?php include($navigation)?>

    <div class="parallax-image-signs">
        <div class="card-img-overlay button">
            <a href="#beginning" class="btn btn-primary btn-lg active button-color" role="button" aria-pressed="true">Find your sign</a>
        </div>
    </div>

    <div id="beginning">
        <!-- I put a div here so that when the buttons is pressed it scrolls down before the welcome text. -->
    </div>

    <div class="text-center text-color astro-font title-top">
      <h4>What is your</h4>
      <h1>Zodiac Sign?</h1>
    </div>

    <div>
      <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <div class="text-center mt-5 text-color">
      <p>Your day of birth will determine which of these 12 zodiac signs you are!</p>
      <p>Find it and discover</p>
    </div>

    <form class="form mb-4 col-lg-10 container" name="signForm">
      <div class="form-group date-mg">
        <label class="text-color">Input the date of your birthday and find out your zodiac sign</label>
        <input type="date" name="date" max="2030-12-31" min="1900-01-01" value="" class="form-control">
      </div>
      <div class="text-center">
        <button onclick="return dateSign();" type="button" class="btn btn-primary button-color mt-3">Press to find your Zodiac sign</button>
      </div>

      <div id="feedback-card" class="card bg-transparent text-color mt-5">
        <!-- This is where the card will show up -->
      </div>
    </form>

    <div data-aos="fade-up" class="d-flex flex-row flex-wrap pad-cards mt-5">
        <div class="p-3">
          <a class="card-link-sign text-color" href="aries.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/aries/aries_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Aries</h5>
                  <h5 class="card-text">March 21st - April 19th</h5>
                  <p class="card-text">Courageous, determined, confident, enthusiastic, optimistic, honest, passionate</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="taurus.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/taurus/taurus_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Taurus</h5>
                  <h5 class="card-text">April 20th - May 20th</h5>
                  <p class="card-text">Reliable, patient, practical, devoted, responsible, stable</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="gemini.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/gemini/gemini_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Gemini</h5>
                  <h5 class="card-text">May 21st - June 20th</h5>
                  <p class="card-text">Gentle, affectionate, curious, adaptable, ability to learn quickly and exchange ideas</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="cancer.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/cancer/cancer_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Cancer</h5>
                  <h5 class="card-text">June 21st - July 22nd</h5>
                  <p class="card-text">Tenacious, highly imaginative, loyal, emotional, sympathetic, persuasive</p>
                </div>
            </div>
          </a>
        </div>
      </div>

      <div data-aos="fade-up" class="d-flex flex-row flex-wrap pad-cards">
        <div class="p-3">
          <a class="card-link-sign text-color" href="leo.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/leo/leo_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Leo</h5>
                  <h5 class="card-text">July 23rd - August 22nd</h5>
                  <p class="card-text">Creative, passionate, generous, warm-hearted, cheerful, humorous</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="virgo.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/virgo/virgo_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Virgo</h5>
                  <h5 class="card-text">August 23rd - September 22nd</h5>
                  <p class="card-text">Loyal, analytical, kind, hardworking, practical</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="libra.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/libra/libra_images.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Libra</h5>
                  <h5 class="card-text">September 23rd - October 22nd</h5>
                  <p class="card-text">Cooperative,diplomatic, gracious, fair-minded, social</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="scorpio.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/scorpio/scorpio_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Scorpio</h5>
                  <h5 class="card-text">October 23rd - November 21st</h5>
                  <p class="card-text">Resourceful, brave, passionate, stubborn, a true friend</p>
                </div>
            </div>
          </a>
        </div>
      </div>

      <div data-aos="fade-up" class="d-flex flex-row flex-wrap pad-cards">
        <div class="p-3">
          <a class="card-link-sign text-color" href="sagittarius.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/saggittarius/sagittarius_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Saggittarius</h5>
                  <h5 class="card-text">November 22nd - December 21st</h5>
                  <p class="card-text">Generous, idealistic, great sense of humor</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="capricorn.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/capricorn/capricorn_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Capricorn</h5>
                  <h5 class="card-text">Decemeber 22nd - January 19th</h5>
                  <p class="card-text">Responsible, disciplined, self-control, good managers</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="aquarius.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/aquarius/aquarius_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Aquarius</h5>
                  <h5 class="card-text">January 20th - February 18th</h5>
                  <p class="card-text">Progressive, original, independent, humanitarian</p>
                </div>
            </div>
          </a>
        </div>
        <div class="p-3">
          <a class="card-link-sign text-color" href="pisces.php" title="Click to find out more!">
            <div class="card bg-dark text-color card-width card-sign">
                <img class="card-img-top" src="assets/images/pisces/pisces_image.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title astro-font">Pisces</h5>
                  <h5 class="card-text">February 19th - March 20th</h5>
                  <p class="card-text">Compassionate, artistic, intuitive, gentle, wise, musical</p>
                </div>
            </div>
          </a>
        </div>
      </div>

      <?php include($footer);?>

    <!-- Optional JavaScript -->
    <?php include($javascript);?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts);?>
  </body>
</html>