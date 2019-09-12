<?php
declare(strict_types = 1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov\Real\Bad;

use Rooftop\PhpBootstrap\SOLID\Liskov\Real\StudentRepository;

final class StudentRepositoryMySql extends DoctrineRepository implements StudentRepository
{
    public function save(Student $student): void
    {
        $this->entityManager()->persist($student);
    }

    public function flush(Student $student): void
    {
        $this->entityManager()->flush($student);
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
