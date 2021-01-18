<?php
if(isset($_POST['submit']))
{

    $name = $_POST["cf-name"];
    
	$email = $_POST["cf-email"];
	
	$content = $_POST["cf-message"];
	
    $to = "faizanmir74@gmail.com";
    
    $email_subject = "Contact form submission: $name";
    
    $email_body = "You have received a new message. ".
    
    " Here are the details:\n Name: $name \n ".
    
    "Email: $email\n Message \n $content";
    
    
    mail($to,$email_subject,$email_body);
    
    //redirect to the 'thank you' page
    
    echo "<script>location='index.html'</script>";
   
}
?>
