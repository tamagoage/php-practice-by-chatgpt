<?php
namespace tamagoage\PhpPracticeByChatgpt;

use tamagoage\PhpPracticeByChatgpt\Student;

class Grade{

    protected string $grade;

    public function __construct(
        private Student $student,
        private string $subject,
        private int $score
    ){
        $this->calculateGrade();
    }

    public function calculateGrade() {
        if ($this->score >= 90) {
            $this->grade = "S";
        } elseif ($this->score >= 80) {
            $this->grade = "A";
        } elseif ($this->score >= 70) {
            $this->grade = "B";
        } elseif ($this->score >= 60) {
            $this->grade = "C";
        } else {
            $this->grade = "不合格";
        }
    }

    public function getStudentName() {
        return $this->student->name;
    }

    public function getGrade() {
        return $this->grade;
    }
}