<?php

declare(strict_types=1);

class Student {
    private string $name;
    private int $age;
    private string $course;

    public function __construct(string $name, int $age, string $course)
    {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    public function introduce() {
        return  " My name is " . $this->name . ", I am " . $this->age . " years old and I study " . $this->course ."." ;
    }

    public function changeCourse(string $newCourse){
        $this->course = $newCourse;
    }

    public function isAdult() {
        return $this->age >= 18;
    }
}