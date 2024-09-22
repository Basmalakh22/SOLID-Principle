<?php
class User {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

class UserValidator {
    public function validate(User $user) {
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }
    }
}

class UserRepository {
    public function save(User $user) {
        // Pseudo-code to save user to database
        // Database::insert(['email' => $user->getEmail(), 'password' => $user->getPassword()]);
    }
}

class EmailService {
    public function sendWelcomeEmail(User $user) {
        mail($user->getEmail(), "Welcome!", "Thank you for registering.");
    }
}

// Usage
$user = new User('user@example.com', 'securepassword');
$validator = new UserValidator();
$repository = new UserRepository();
$emailService = new EmailService();

try {
    $validator->validate($user);  // Validate user
    $repository->save($user);     // Save to database
    $emailService->sendWelcomeEmail($user);  // Send email
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
