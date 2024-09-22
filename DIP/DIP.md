# Dependency Inversion Principle (DIP)

- The Dependency Inversion Principle (DIP) is one of the five SOLID principles of object-oriented design. It states that high-level modules should not depend on low-level modules. Both should depend on abstractions, and abstractions should not depend on details. The details should depend on abstractions.

- Example in PHP
  - Let’s say we have a class that handles user notifications. Without following DIP, the high-level class UserService directly depends on a low-level class EmailService. This makes it hard to change or extend in the future, such as when you want to notify users via SMS instead of email.
