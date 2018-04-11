<?php
namespace controllers;

class Form {
    public function sendData($f3)
    {
        $data = $f3->get('POST');
        $email = $f3->get('email');
        $subject = "Новый e-mail :: $f3->get('domain')";
        $message = \models\Mail::createMessage($data);
        if (\models\Mail::mailTo($email, $subject, $message)) {
            $f3->status(200);
        } else {
            $f3->status(418);
        }
    }
}
