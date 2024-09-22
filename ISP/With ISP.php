<?php

// Segregated interfaces
interface CleanerInterface {
    public function clean();
}

interface DeveloperInterface {
    public function code();
}

class Cleaner implements CleanerInterface {
    public function clean() {
        echo "Cleaning the office.\n";
    }
}

class Developer implements DeveloperInterface {
    public function code() {
        echo "Writing code.\n";
    }
}

$cleaner = new Cleaner();
$cleaner->clean();  // Works fine.

$developer = new Developer();
$developer->code(); // Works fine.
