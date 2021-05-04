<?php
 $title = $_POST['title'];
  $coordinates = $_POST['coordinates'];
  $description = $_POST['description']; 
 $shelterorcampsite = $_POST['shelter-campsite'];
 $distancetowater = $_POST['howfarawayiswater'];
 $image = $_POST['file'];


$email_from = 'contactbackpackingproject@gmail.com';

	$email_subject = "New Campsite submission";

	$email_body = "You have received a new campsite submisssion. The title is: $title.\n".
                            "Here are the coordiantes: $coordinates". 
                             "The description is: $description".
                               "It is a: $shelter $campsite."
                               "The distance to water is: $distancetowater".
                               "The image is: $image".
