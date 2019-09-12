<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Infrastructure\Persistence\Repositories\Eloquent;

use Rooftop\PhpBootstrap\Domain\Entities\Course;
use Rooftop\PhpBootstrap\Domain\Repositories\CourseRepository;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseDuration;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseId;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseName;

final class EloquentCourseRepository implements CourseRepository
{
    public function save(Course $course): void
    {
        $model = new CourseEloquentModel();

        $model->id = $course->getId()->value();
        $model->name = $course->getName()->value();
        $model->duration = $course->getDuration()->value();

        $model->save();
    }

    public function search(CourseId $id): ?Course
    {
        $model = CourseEloquentModel::find($id->value());

        if (null === $model) {
            return null;
        }

        return new Course(
            new CourseId($model->id),
            new CourseName($model->name),
            new CourseDuration($model->duration)
        );
    }
}
