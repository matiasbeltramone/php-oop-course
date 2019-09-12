<?php
declare(strict_types = 1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Real;

final class StudentRepositoryMySql extends DoctrineRepository implements StudentRepository
{
    public function save(Student $student): void
    {
        $this->persist($student);
    }

    public function flush(Student $student): void
    {
        $this->flush($student);
    }

    public function saveAll(Students $students): void
    {
        each($this->persister(), $students);
    }

    public function search(StudentId $id): ?Student
    {
        return $this->repository(Student::class)->find($id);
    }

    public function all(): Students
    {
        return new Students($this->repository(Student::class)->findAll());
    }
}
