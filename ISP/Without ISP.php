<?php

interface WorkerInterface {
    public function clean();
    public function code();
}

class Cleaner implements WorkerInterface {
    public function clean() {
        echo "Cleaning the office.\n";
    }

    public function code() {
        // Cleaners do not code, but we're forced to implement this method.
        throw new Exception("Cleaners cannot code!");
    }
}

class Developer implements WorkerInterface {
    public function clean() {
        // Developers do not clean, but we're forced to implement this method.
        throw new Exception("Developers do not clean!");
    }

    public function code() {
        echo "Writing code.\n";
    }
}

$cleaner = new Cleaner();
$cleaner->clean();  // Works fine.
$cleaner->code();   // Will throw an exception.

$developer = new Developer();
$developer->code(); // Works fine.
$developer->clean(); // Will throw an exception.
