<?php
namespace models;
class shvMail {
    public static function mailTo($email, $subject, $message)
    {
        $message = "<html><body>$message</body></html>";
        
        $header = "From: $f3->get('site_name') <no-reply@$f3->get('domain')>\r\n";
		$header .= "Reply-To: no-reply@$f3->get('domain')\r\n";
        $header .= "Content-Type: text/html; charset=utf-8\r\n";
        
        return mail($email,$subject,$message,$header);
    }

    public static function createMessage($data)
    {
        $message = "<p>Email: <a href=\"mailto:$data[email]\">$data[email]</a></p>";
        return $message;
    }
}