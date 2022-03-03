<?php require("assets/php/configuration.php"); ?>
<?php require_once("assets/php/db-access/db-config.php"); ?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $errorList = [];
        
        $firstName = filter_var($_POST["firstName"], FILTER_SANITIZE_STRING);
        $lastName = filter_var($_POST["lastName"], FILTER_SANITIZE_STRING);
        $comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);

        if(empty($firstName)){
            array_push($errorList, "ERROR: First name empty.");
        }

        if(empty($lastName)){
            array_push($errorList, "ERROR: Last name empty.");
        }

        if(empty($comment)){
            array_push($errorList, "ERROR: Comment form is empty.");
        }

        if(!empty($errorList)){
            $errorMessage = "";
            
            foreach($errorList as $error){
                $errorMessage .= "<br>$error";
            }

            exit($errorMessage);
        }

        $mysqli = connectToDB();

        $sql = "INSERT INTO commentIndividual(firstName, lastName, comment) VALUES (?, ?, ?)";

        $stmt = $mysqli->prepare($sql);

        $stmt-> bind_param("sss", $firstName, $lastName, $comment);

        if(!$stmt->execute()) {
            echo "Error";
        } else {
            echo "Record from form put into table.";
        }
      
        $stmt->close();
        $mysqli->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Comments</title>
    <!-- Required meta tags -->
    <?php include($htmlMeta);?>

    <?php include($cssLink);?>
    <?php include($icons);?>
    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss)?>
  </head>
  <body onscroll="scrolEvenLess()">
    <?php include($navigation)?>

    <div class="text-center title-top text-color astro-font">
      <h1>Comments</h1>
      <h5>A Place to Give Feedback</h5>
    </div>

    <div>
        <img class="seperator" src="assets/images/seperator.png" alt="A seperator for the title and text">
    </div>

    <form class="form mb-4 col-lg-10 container mt-5 comment-form text-color flex-wrap" name="commentForm" method="post" onsubmit="return validateComment();">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Input first name" required>
                    <div id="firstNameError" class="d-flex flex-column"></div>
                </div>
                <div class="col">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Input last name" required>
                    <div id="lastNameError" class="d-flex flex-column"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" class="form-control" rows="8" placeholder="Comment on the page" required></textarea>
        </div>
        <div id="commentError" class="d-flex flex-column"></div>
        <div class="text-center">
            <button type="submit" class="btn button-color btn-primary mt-2">Submit</button>
        </div>
    </form>

    <div class="comment-container">
        <!-- This is where the comment cards will be stored -->
        <?php
            $mysqli = connectToDB();

            $sql = "SELECT * FROM commentIndividual";
            $result = $mysqli->query($sql);
            $numberOfRows = $result->num_rows;

            if($numberOfRows > 0){

                while($row = $result->fetch_assoc()){
                    echo '<div class="card comment-card mt-2">'.
                            '<div class="card-header">'.
                                $row['firstName'] . ' ' . $row['lastName'] .
                            '</div>'.
                            '<div class="card-body">'.
                                '<div class="card-text mb-0">'.
                                    '<p>'. $row['comment'] .'</p>'.
                                '</div>'.
                            '</div>'.
                        '</div>';
                }
            }
            else{
                echo "Nothing.";
            }
        ?>
    </div>

    <?php include($footer);?>

    <!-- Optional JavaScript -->
    <?php include($javascript);?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts);?>
  </body>
</html>