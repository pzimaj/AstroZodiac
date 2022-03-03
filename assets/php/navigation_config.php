<?php
  $pages = array(
    "index.php" => "Home",
    "signs.php" => "What are you?"
  );

  $astroPages = array(
    "aries.php" => "Aries",
    "taurus.php" => "Taurus",
    "gemini.php" => "Gemini",
    "cancer.php" => "Cancer",
    "leo.php" => "Leo",
    "virgo.php" => "Virgo",
    "libra.php" => "Libra",
    "scorpio.php" => "Scorpio",
    "sagittarius.php" => "Sagittarius",
    "capricorn.php" => "Capricorn",
    "aquarius.php" => "Aquarius",
    "pisces.php" => "Pisces"
  );

  $mandPages = array(
    "comments.php" => "Comments",
    "rubrics.php" => "Rubrics",
    "references.php" => "References"
  );

  $currentPage = $_SERVER['REQUEST_URI'];

  function isActive($url) {
    global $currentPage;
    $urlParts = explode("/", $currentPage);
    $currentPageUrl = end($urlParts);
    return $url === $currentPageUrl ? 'active' : '';
  }
?>

<nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
  <a class="navbar-brand" href="index.php"><img src="assets/images/small-logo.png" alt="Small logo picture"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
        <?php
          foreach($pages as $url=>$title) {
            $isActive = isActive($url);
    
            $link = "
              <li class='nav-item $isActive'>
                <a class='nav-link' href='$url'>$title</a>
              </li>
            ";

            echo $link;
          }
          
        ?> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Horoscopes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
            <?php
              foreach($astroPages as $url=>$title){

                $link = "
                  <a class='dropdown-item' href='$url'>$title</a>
                ";

                echo $link;
              } 
            ?> 
          </div>
        </li>
        <?php
          foreach($mandPages as $url=>$title){
            $isActive = isActive($url);
    
            $link = "
              <li class='nav-item $isActive'>
                <a class='nav-link' href='$url'>$title</a>
              </li>
            ";

            echo $link;
          }
        ?>
    </ul>
  </div>
</nav>
