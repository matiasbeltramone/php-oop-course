<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\KeepReal\Good;

final class VideoPostController extends ApiController
{
    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request)
    {
        $command = new CreateVideoCommand(
            new Uuid($request->get('request_id')),
            $request->get('id'),
            $request->get('type'),
            $request->get('title'),
            $request->get('url'),
            $request->get('course_id')
        );

        $this->dispatch($command);

        return new ApiHttpCreatedResponse();
    }
}
