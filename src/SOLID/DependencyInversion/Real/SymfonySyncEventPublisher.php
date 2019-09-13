<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\DependencyInversion\Real;

use DomainEvent;
use DomainEventPublisher;

final class SymfonySyncEventPublisher implements DomainEventPublisher
{
    /**
     * Records events to be published afterwards using the publishRecorded method
     */
    public function record(DomainEvent ...$domainEvents): void
    {
        // TODO: Implement record() method.
    }

    /**
     * Publishes previously recorded events
     */
    public function publishRecorded(): void
    {
        // TODO: Implement publishRecorded() method.
    }

    /**
     * Immediately publishes the received events
     */
    public function publish(DomainEvent ...$domainEvents)
    {
        // TODO: Implement publish() method.
    }
}
