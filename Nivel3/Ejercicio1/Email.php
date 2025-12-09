<?php

class Email implements Notification {

    public function notify(string $message) : string {
        return "$message. You've been notified via Email.";
    }
   

}

?>