<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Real;

final class StudentTotalVideosCreatedIncreaser
{
    private $finder;
    private $repository;

    public function __construct(StudentRepository $repository)
    {
        $this->finder = new StudentFinder($repository);
        $this->repository = $repository;
    }

    public function __invoke(StudentId $id)
    {
        $student = $this->finder->__invoke($id);

        $student->increaseTotalVideosCreated();

        $this->repository->save($student);
        $this->repository->flush($student);
    }
}
