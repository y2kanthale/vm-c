<?php
// print_r($_POST); die();
ob_start();
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subjet'];
$message = $_POST['message'];



$to = "test@vmconsultantspune.com";
$subject = "Email from user";

$message = "
<html>
<head>
<title>Email from User</title>
</head>
<body>
<p>This email from user</p>
<table>
<tr><td><b>Name</b></td></tr>
<tr><td>$name</td</tr>
<tr><td><b>Phone</b></td></tr> 
<tr> <td>$phone</td></tr>
<tr><td><b>Email</b></td></tr>
<tr> <td>$email</td></tr>
<tr><td><b>Message</b></td></tr>
<tr><td>$message</td></tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

//mail($to,$subject,$message,$headers);
if(mail($to,$subject,$message,$headers)){
header('Location: index.html#footer');    
}
 
 
 
 
 
 
 
send_mail($name,$email,$subject,$message);
header('Location: index.html#footer');

function send_mail($name,$email,$subject,$desc)
	{
			$to =  'info@ibschoolssports.com';
                    $message = '<table border="1" cellspacing="0" width="100%">
                                <tr style="">
                                    <td style=" padding: 10px;">
                                        <strong>Dandd Garden Developers</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:10px; background-color: #ffffff;">
                                       	Dear Admin,
										Please check following enquiry:-
                                        <p>Name- '.$name.'</p>
                                        <p>Email - '.$email.'</p>
                                        <p>Desc - '.$desc.'</p>
									</td>
                                </tr>
                            </table>';
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <'.$email.'>' . "\r\n";
                    mail($to,$subject,$message,$headers);
	}
?>


