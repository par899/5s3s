{{ "<?php" | safeHTML }}
$name =$_POST['name'];
$Visitor_email =$_POST['name'];
$message = $_POST['message'];

$email_from = $Visitor_email;
$email_subject ="New- Form Submission";
$email_body ="User name: $name\n" . 
                "User email:$email \n" . 
                "user message: $message\n";

$to = "pardeep14kaur@gmail.com";
$headers ="From: $email_from \r\n";
$headers ="Reply-To: $Visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
headers("Location:index.html");
{{ "?>" | safeHTML }}