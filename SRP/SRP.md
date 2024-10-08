# Single Responsibility Principle (SRP)

- The Single Responsibility Principle (SRP) is one of the five SOLID principles of object-oriented programming, stating that a class should have only one reason to change, meaning it should only have one responsibility.

- Example: A User Registration System
In this example, we will split responsibilities into separate classes: one for managing user data, one for validation, and another for sending notifications.

## without SPR

- the User class is responsible for:
  - Validating the email
  - Registering the user (business logic)
  - Sending an email

## with SPR

- User class only handles user data.
- UserValidator handles validation.
- UserRepository handles saving the user.
- EmailService handles email notifications.
