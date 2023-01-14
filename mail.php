<?php
    $mail_to = 'davidkamtravel@gmail.com';
 
    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $message = $_POST['message'];
 
    $subject = 'Subject ' . $name;
 
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Merci pour votre message. Nous vous recontacterons le plus rapidement possible.');
		window.location = 'index.html#formulaire';
         </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify site administrator myadmin@mydomain.com');
		window.location = 'index.html#formulaire';
    </script>
    <?php
    }
?>