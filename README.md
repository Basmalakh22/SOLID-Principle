# SOLID-Principle

The SOLID principles are a set of five design principles in object-oriented programming that aim to create systems that are easy to maintain, understand, and extend. Here’s a breakdown:

1. S - Single Responsibility Principle (SRP)

- Every class or module should have one reason to change, meaning it should only have one responsibility.
- Example: A class handling user authentication should not also manage file uploads. These should be separated into different classes.

1. O - Open/Closed Principle (OCP)

- Classes should be open for extension but closed for modification. This means you should be able to extend the behavior of a class without changing its existing code.
- Example: Instead of modifying an existing class to add new features, you should be able to inherit from it or implement interfaces to add functionality.

1. L - Liskov Substitution Principle (LSP)

- Subtypes must be substitutable for their base types without altering the correctness of the program. Derived classes should be able to replace their base classes.
- Example: If you have a class Bird, and a subclass Penguin, Penguin should still behave like a Bird without breaking the functionality in any system that expects a Bird.

1. I - Interface Segregation Principle (ISP)

- No client should be forced to depend on methods it does not use. In other words, create smaller, more specific interfaces rather than one large, general-purpose interface.
- Example: Instead of having a general Worker interface with methods like work() and sleep(), split them into IWorkable and ISleepable if some workers don’t sleep.

1. D - Dependency Inversion Principle (DIP)

- High-level modules should not depend on low-level modules. Both should depend on abstractions (interfaces), not concrete implementations.
- Example: A class should rely on interfaces or abstract classes instead of concrete classes. This allows easier swapping of implementations without changing the higher-level code.

These principles promote more flexible, scalable, and maintainable code, making it easier to handle future changes and extensions
