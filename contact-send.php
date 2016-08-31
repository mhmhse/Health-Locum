<?php
$EmailFrom = $_REQUEST['email']; 
$EmailTo = "princesegzy01@yahoo.com"; // Your email address here
$Subject = Trim(stripslashes($_POST['subject']));
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
// $Web = Trim(stripslashes($_POST['web'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$Phone = Trim(stripslashes($_POST['phone'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
// $Body .= "website: ";
// $Body .= $Web;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

//var_dump($success);
//exit();

// redirect to success page 
if ($success){ ?>
 <script language="javascript">
	alert('Thank you for your message, we will prosess your request and get bact to you.');
	window.location =  'contact-medline.php';
 </script>
<?php }
else{ ?>
  <script language="javascript">
	alert('Sorry message failed please try again.');
	window.location = 'contact-medline.php';
 </script>
<?php
}
?>