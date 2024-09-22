<?php
class User {
    public function register($email, $password) {
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }

        // Store user in database (pseudo-code)
        // Database::insert(['email' => $email, 'password' => $password]);

        // Send welcome email
        mail($email, "Welcome!", "Thank you for registering.");
    }
}

// Usage
$user = new User($email, $password);
$user->register('user@example.com', 'securepassword');
