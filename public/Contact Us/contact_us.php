<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"])
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$email_subject = "New contact form submission";

	$email_body = "You have received a new contact form submisssion. The name of the person is:
  $name\n"
                            
                             "The description is:n\ $description".
                               "It is a:n\ $shelterorcampsite."
                               "The distance to water is:n\ $distancetowater".
                               "The image is:n\ $image".;

		$to = "contactbackpackingproject@gmail.com";
		
                $headers = "From: $email_from \r\n";

                mail($to,$email_subject,$email_body,$headers);
?>
</html>
