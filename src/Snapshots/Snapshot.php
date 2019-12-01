<?php

/**
 * Event Sourcing implementation.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\EventSourcing\Snapshots;

use ServiceBus\EventSourcing\Aggregate;

/**
 * @psalm-readonly
 */
final class Snapshot
{
    /**
     * Aggregate.
     *
     * @var Aggregate
     */
    public Aggregate $aggregate;

    /**
     * Aggregate version.
     *
     * @var int
     */
    public int $version;

    public function __construct(Aggregate $aggregate, int $version)
    {
        $this->aggregate = $aggregate;
        $this->version   = $version;
    }
}
