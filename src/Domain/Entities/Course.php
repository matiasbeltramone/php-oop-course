<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\Entities;

use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseDuration;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseId;
use Rooftop\PhpBootstrap\Domain\ValueObjects\CourseName;

final class Course
{
    private $id;
    private $name;
    private $duration;

    public function __construct(CourseId $id, CourseName $name, CourseDuration$duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }

    /**
     * @return CourseId
     */
    public function getId(): CourseId
    {
        return $this->id;
    }

    /**
     * @param CourseId $id
     */
    public function setId(CourseId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return CourseName
     */
    public function getName(): CourseName
    {
        return $this->name;
    }

    /**
     * @param CourseName $name
     */
    public function setName(CourseName $name): void
    {
        $this->name = $name;
    }

    /**
     * @return CourseDuration
     */
    public function getDuration(): CourseDuration
    {
        return $this->duration;
    }

    /**
     * @param CourseDuration $duration
     */
    public function setDuration(CourseDuration $duration): void
    {
        $this->duration = $duration;
    }
}
