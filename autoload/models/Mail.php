<?php
namespace models;
class shvMail {
    public static function mailTo($email, $subject, $message)
    {
        $message = "<html><body>$message</body></html>";
        
        $header = "From: NO_NAME <no-reply@no_name.com>\r\n"; // отредачить
		$header .= "Reply-To: no-reply@no_name.com\r\n"; // отредачить
        $header .= "Content-Type: text/html; charset=utf-8\r\n";
        
        return mail($email,$subject,$message,$header);
    }

    public static function createMessage($data)
    {
        $message = "<p>Мыло: $data[email]</p>"; // отредачить по требованию заказчика
        return $message;
    }
}