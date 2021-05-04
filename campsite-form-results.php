<?php
 $title = $_POST['title'];
  $coordinates = $_POST['coordinates'];
  $description = $_POST['description']; 
 $shelterorcampsite = $_POST['shelter-campsite'];
 $distancetowater = $_POST['howfarawayiswater'];
 $image = $_POST['file'];

	$email_subject = "New Campsite submission";

	$email_body = "You have received a new campsite submisssion. The title is: $title.\n".
                            "Here are the coordiantes:n\ $coordinates". 
                             "The description is:n\ $description".
                               "It is a:n\ $shelterorcampsite."
                               "The distance to water is:n\ $distancetowater".
                               "The image is:n\ $image".;

		$to = "contactbackpackingproject@gmail.com";
		
                $headers = "From: $email_from \r\n";

                mail($to,$email_subject,$email_body,$headers);
?>
