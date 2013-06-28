<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php 
 $to = "you@yoursite.com"; 
 $subject = "Contact Us"; 
 $email = $_REQUEST['email'] ; 
 $message = $_REQUEST['message'] ; 
 $headers = "From: $email"; 
 $sent = mail($to, $subject, $message, $headers) ; 
 if($sent) 
 {print "Your mail was sent successfully"; }
 else 
 {print "We encountered an error sending your mail"; }
 ?> 
</body>
</html>