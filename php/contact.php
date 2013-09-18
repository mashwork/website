<?php 

if($_POST){    
	
	$name	 =$_POST['name'];
	$company =$_POST['company'];    
	$email	 =$_POST['email'];    
	$text	 =$_POST['text'];       

	//send email    
	mail("contact@mashwork.com", $name . ", " . $company,    
	$text, "From:" . $email); 

} 

?>