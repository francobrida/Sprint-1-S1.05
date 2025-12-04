<?php

class Email implements Notification {

    public function notify($message) : string {
        return "$message. You've been notified via Email.";
    }
   

}

?>