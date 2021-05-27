<?php
//varisble setting 
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$number = $_REQUEST['number'];
$message = $_REQUEST['message'];

//check input fields

if(empty($name) || empty($email) || empty($number) || empty($message))
{
	echo "please fill all the fields";
}

else
{
   mail("gypsipathak2000@gmail.com", "food delivery", $message "From: $name < $email>");
   echo "<script type='type='text/javascript'>alerts('your message sent successfully');
   window.history.log(-1);
  </script>";

}


?>