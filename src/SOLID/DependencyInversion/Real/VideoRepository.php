<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\DependencyInversion\Real;

interface VideoRepository
{
    public function save(Video $video): void;

    public function search(VideoId $id): ?Video;
}
