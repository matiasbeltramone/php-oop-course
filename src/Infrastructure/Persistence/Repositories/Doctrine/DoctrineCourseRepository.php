<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Infrastructure\Persistence\Repositories\Doctrine;

use Rooftop\PhpBootstrap\Domain\Entities\Course;
use Rooftop\PhpBootstrap\Domain\Repositories\CourseRepository;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseId;

final class DoctrineCourseRepository extends DoctrineRepository implements CourseRepository
{
    public function save(Course $course): void
    {
        $this->persist($course);
    }

    public function search(CourseId $id): ?Course
    {
        return $this->repository(Course::class)->find($id);
    }
}
