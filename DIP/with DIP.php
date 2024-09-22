<?php

// Step 1: Create an abstraction (interface) for NotificationService
interface NotificationServiceInterface {
    public function send($message);
}

// Step 2: Implement the EmailService that adheres to the NotificationServiceInterface
class EmailService implements NotificationServiceInterface {
    public function send($message) {
        // Logic to send an email
        echo "Sending email: " . $message;
    }
}

// Step 3: Implement another service, like SMS, that also adheres to the interface
class SmsService implements NotificationServiceInterface {
    public function send($message) {
        // Logic to send an SMS
        echo "Sending SMS: " . $message;
    }
}

// Step 4: UserService now depends on the abstraction (NotificationServiceInterface), not a concrete class
class UserService {
    private $notificationService;

    public function __construct(NotificationServiceInterface $notificationService) {
        $this->notificationService = $notificationService;
    }

    public function notify($message) {
        $this->notificationService->send($message);
    }
}

// Usage:

// You can inject EmailService or SmsService into UserService
$emailService = new EmailService();
$userService = new UserService($emailService);
$userService->notify('Welcome to our service!');

// If you want to switch to SMS, just inject SmsService without changing UserService
$smsService = new SmsService();
$userService = new UserService($smsService);
$userService->notify('Welcome to our service!');
