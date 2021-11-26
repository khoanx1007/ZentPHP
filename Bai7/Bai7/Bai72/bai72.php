<?php
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
function send_email($email_recive,$name,$contents,$subject){
            require 'src/Exception.php';
            require 'src/PHPMailer.php';
            require 'src/SMTP.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->setLanguage('vi', '/optional/path/to/language/directory/');
    $mail->SMTPDebug  = 0;
            $mail->SMTPOptions = array (
            'ssl' => array(
            'verify_peer'  => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true)
            );
    $mail->CharSet="UTF-8";
    $mail->Debugoutput = "html"; 
    $mail->Host       = "smtp.gmail.com"; 
    $mail->Port       = 587; 
    $mail->SMTPSecure = "tls"; 
    $mail->SMTPAuth   = true; 
    $mail->Username   = "khoanx1007@gmail.com";
    $mail->Password   = "lamkhoa1997";
    $mail->SetFrom("lambeo107@gmail.com", "Zent Group"); 
    $mail->AddReplyTo("lambeo107@gmail.com","Zent Group");
    $mail->AddAddress($email_recive, $name);
    $mail->Subject = $subject; 
    $mail->MsgHTML($contents); 
    $mail->AltBody = "Nội dung thư";
    if(!$mail->Send()) {
                return false;
    } else {
                return true;
    }
}
$contents = '
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>';
$subject = 'Test send email';
send_email("lambeo107@gmail.com", "Nguyễn Xuân Khoa",$contents,$subject)
?>