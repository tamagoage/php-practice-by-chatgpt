<?php

namespace tamagoage\PhpPracticeByChatgpt;

class Person {
    public string $name;
    public int $age;

    public function __construct($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "My name is {$this->name}. I am {$this->age} years old.";
    }

    public function celebrateBirthday() {
        $this->age++;
        return $this->age;
    }
}
