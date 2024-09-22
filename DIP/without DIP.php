<?php

class EmailService {
    public function send($message) {
        // Logic to send an email
        echo "Sending email: " . $message;
    }
}

class UserService {
    private $emailService;

    public function __construct() {
        $this->emailService = new EmailService();
    }

    public function notify($message) {
        $this->emailService->send($message);
    }
}

$userService = new UserService();
$userService->notify('Welcome to our service!');
