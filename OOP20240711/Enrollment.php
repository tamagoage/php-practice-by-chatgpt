<?php
namespace tamagoage\PhpPracticeByChatgpt;

use tamagoage\PhpPracticeByChatgpt\Student;
use tamagoage\PhpPracticeByChatgpt\Course;

class Enrollment {

    private array $enrolledStudents = [];
    private static int $totalEnrollments = 0;

    public function __construct(
        private Course $course
    ){}

    public function enrollStudent(Student $student) {
        array_push($this->enrolledStudents, $student);
        self::$totalEnrollments++;
    }

    public function getEnrolledStudents() {
        return $this->enrolledStudents;
    }

    public static function getTotalEnrollments() {
        return self::$totalEnrollments;
    }
}