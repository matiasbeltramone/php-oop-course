<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\Repositories;

use Rooftop\PhpBootstrap\Domain\Entities\Course;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseId;

interface CourseRepository
{
    public function save(Course $course): void;

    public function search(CourseId $id): ?Course;
}
