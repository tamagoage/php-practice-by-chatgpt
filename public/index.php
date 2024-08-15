<?php
require_once __DIR__ . '/../vendor/autoload.php';

use tamagoage\PhpPracticeByChatgpt\Person;
use tamagoage\PhpPracticeByChatgpt\BirthdayParty;
use tamagoage\PhpPracticeByChatgpt\Student;
use tamagoage\PhpPracticeByChatgpt\Course;
use tamagoage\PhpPracticeByChatgpt\Grade;
use tamagoage\PhpPracticeByChatgpt\Enrollment;

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

function Course() {
    $ballSearch = new Course("ボール探し", "探索の能力を高める(?)");
    echo $ballSearch->getDetails();
}

function Grade() {
    $rougeGrade = new Grade(new Student("るーじゅ", 10, "ふじとみ"), "ボール探し", 90);
    echo $rougeGrade->getGrade();
}

function Enrollment() {
    $ballSearch = new Course("ボール探し", "探索の能力を高める(?)");
    $ballSearchEnrollment = new Enrollment($ballSearch);

    $rouge = new Student("るーじゅ", 10, "ふじとみ");
    $ryou = new Student("りょう", 16, "ふじとみ");

    $ballSearchEnrollment->enrollStudent($rouge);
    $ballSearchEnrollment->enrollStudent($ryou);

    var_dump($ballSearchEnrollment->getEnrolledStudents());
    echo $ballSearchEnrollment->getTotalEnrollments();
}
