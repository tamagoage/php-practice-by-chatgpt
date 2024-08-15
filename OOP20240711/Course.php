<?php
namespace tamagoage\PhpPracticeByChatgpt;

class Course {
    static int $totalCourses = 0;

    public function __construct(
        protected string $courseName,
        protected string $courseDescription
    ){
        self::$totalCourses++;
    }

    public function getDetails() {
        return $this->courseName . "は" . $this->courseDescription . "というものです";
    }
}