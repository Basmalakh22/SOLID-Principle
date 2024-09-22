<?php

// Base class
abstract class Bird {
    abstract public function makeSound();
}

// Interface for flying birds
interface Flyable {
    public function fly();
}

// Subclass for flying birds
class Sparrow extends Bird implements Flyable {
    public function fly() {
        return "I'm flying!";
    }

    public function makeSound() {
        return "Chirp!";
    }
}

// Subclass for non-flying birds
class Penguin extends Bird {
    public function makeSound() {
        return "Honk!";
    }
}

function letBirdMakeSound(Bird $bird) {
    return $bird->makeSound();
}

// Testing
$sparrow = new Sparrow();
echo $sparrow->fly(); // Outputs: I'm flying!
echo letBirdMakeSound($sparrow); // Outputs: Chirp!

$penguin = new Penguin();
echo letBirdMakeSound($penguin); // Outputs: Honk!
