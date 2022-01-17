<?php 

$status = '';

if(isset($_POST['submit']) ) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'ruchsachinthana@gmail.com';
    $mail_subject = 'Message from Website';
    $email_body = "Message from Contact Us page of the Website: <br>";
    $email_body .= "<b>From:</b> {$fullname} <br>";
    $email_body .= "<b>Subject:</b> {$subject} <br>";
    $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));


    $header = "From: {$email}\r\nContent-Type: text/html;";

    $send_mail_result = mail($to, $mail_subject, $email_body, $header);

    if($send_mail_result) {
        $status = '<p class="success"> Message Sent Successsfully</p>';
       
    } else{
        $status = '<p class="error"> Error: Message was not sent.</p>';
       
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link css -->

    <link rel="stylesheet" href="style.css">

    <title>Contact Us</title>
</head>
<body>
<div class="container">
    <h1>Contact Us</h1>

    <?php echo $status ; ?>
    <form action="contact-us.php" method="POST">
        <p>
            <lable for="fullname">Full Name *:</lable>
            <input type="text" name="fullname" id="fullname" required>
        </p><p>
            <lable for="email">Email *:</lable>
            <input type="email" name="email" id="email" required>
        </p></p><p>
            <lable for="subject">Subject *:</lable>
            <input type="subject" name="subject" id="subject" required>
        </p>
        </p></p><p>
            <lable for="message">Message *:</lable>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            
        </p>

        <p>
            <button type="submit" name="submit">Send Message</button>
        </p>

    </form>
</div>
</body>
</html>