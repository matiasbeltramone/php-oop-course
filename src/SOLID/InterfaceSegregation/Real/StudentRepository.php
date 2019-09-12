<?php
declare(strict_types = 1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Real;

interface StudentRepository
{
    public function save(Student $student): void;

    public function flush(Student $student): void;

    public function saveAll(Students $students): void;

    public function search(StudentId $id): ?Student;

    public function all(): Students;
}
