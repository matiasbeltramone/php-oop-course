<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\DependencyInversion\Real;

final class VideoRepositoryMySql extends DoctrineRepository implements VideoRepository
{
    public function save(Video $video): void
    {
        $this->persist($video);
    }

    public function search(VideoId $id): ?Video
    {
        return $this->repository(Video::class)->find($id);
    }
}
