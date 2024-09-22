<?php

// Base class
class Bird {
    public function fly() {
        return "I'm flying!";
    }
}

// Subclass that adheres to LSP
class Sparrow extends Bird {
    // Inherits fly() from Bird
}

// Subclass that violates LSP
class Penguin extends Bird {
    public function fly() {
        throw new Exception("Penguins can't fly!");
    }
}

function makeBirdFly(Bird $bird) {
    return $bird->fly();
}

// Testing
$sparrow = new Sparrow();
echo makeBirdFly($sparrow); // Outputs: I'm flying!

$penguin = new Penguin();
try {
    echo makeBirdFly($penguin); // Throws exception
} catch (Exception $e) {
    echo $e->getMessage(); // Outputs: Penguins can't fly!
}
