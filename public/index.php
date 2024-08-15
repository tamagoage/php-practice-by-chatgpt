<?php
require_once __DIR__ . '/../vendor/autoload.php';

use tamagoage\PhpPracticeByChatgpt\Person;
use tamagoage\PhpPracticeByChatgpt\BirthdayParty;
use tamagoage\PhpPracticeByChatgpt\Student;

function Person() {
    $person = new Person("John", 20);
    echo $person->celebrateBirthday();
}

function BirthdayParty() {
    $rouge = new Person("るーじゅ", 10);
    $array = [];
    array_push($array, $rouge);
    $rougeParty = new BirthdayParty($array);
    $rougeParty->celebrateAll();
}

function Student() {
    $rouge = new Student("るーじゅ", 10, "ふじとみ");
    echo $rouge->StudentIntroduce();
}