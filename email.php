<?php
session_start();
if (isset($_POST['sendmail']))
{		
require 'PHPMailerAutoload.php';
require 'credential.php';
if(isset($_SESSION['user']))
{
include ('config/config.php');
	
date_default_timezone_set('Asia/Kuala_Lumpur');

$bookId=$_SESSION['cartcart'];
$userId=$_SESSION['uId'];
$s=strtotime($_SESSION['bookDate']);
$e=strtotime($_SESSION['expireDate']);
$start=date('Y-m-d',$s);
$end=date('Y-m-d',$e);	
$currBook=null;
if($s>$e)
{
	$status="must be returned";
}
else
{
	$status="Borrowing";
}

for($x=0;$x<count($bookId);$x++)
{
	$currBook=$bookId[$x];

		if(mysqli_query($mysql,"INSERT INTO user_books(user_id,book_id,start,end,status) VALUES('$userId','$currBook','$start','$end','$status')"))
        {
            echo "Data Connection Success!";

$mail = new PHPMailer;

$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL,'E-Library');
$mail->addAddress($_SESSION['email']);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(EMAIL, 'Information');
$mail->addCC('eLibrary@admin.com');
$mail->addBCC('admin@libraryManagementSystem.com');

/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your Book Order!';
$mail->Body    = 'This is your list of book order: <br><br> '.$_SESSION["items"].' <br> Total books:'.$_SESSION["itemq"].' <br> <br><br> Please Pickup your book at nearest branch of our E-Library. Thank you for using our services. ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	?>
<script>window.location = "place_order.php";</script>
		<?php
}
        }
        else
        {
            echo $userId . $start . $end;
        }
}

	
}
else
{
	echo '<script>window.location = "index.php";alert("Please sign up or Login as a user.")</script>';
}
}

?>
