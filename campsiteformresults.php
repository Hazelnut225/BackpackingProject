<?php
// define variables and set to empty values
$shelterErr = $campsiteErr = $coordinatesErr = $descriptionErr = $howfarawayiswaterErr="";
$name = $email = $gender = $comment = $website = "";



  if (empty($_POST["coordinates"])) {
    $coordinates = "";
  } else {
    $coordinates = test_input($_POST["coordinates"]);
  }

  if (empty($_POST["description"])) {
    $description = "";
  } else {
    $description = test_input($_POST["description"]);
  }

  if (empty($_POST["howfarawayiswater"])) {
    $howfarawayiswaterErr = "Gender is required";
  } else {
    $howfarawayiswater = test_input($_POST["howfarawayiswater"]);
  }
}
if($_POST["message"]) {
    mail("contactbackpackingproject@gmail.com.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
