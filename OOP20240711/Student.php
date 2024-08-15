<?php
namespace tamagoage\PhpPracticeByChatgpt;

use tamagoage\PhpPracticeByChatgpt\Person;

class Student extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public readonly string $school
    ){
        parent::__construct($name, $age);
    }

    public function StudentIntroduce () {
        return parent::introduce() . "{$this->school}出身です";
    }
}