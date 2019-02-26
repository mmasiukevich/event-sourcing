<?php

/**
 * Event Sourcing implementation
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\EventSourcing\Exceptions;

/**
 *
 */
final class InvalidAggregateIdentifier extends \RuntimeException
{
    /**
     * @return self
     */
    public static function emptyId(): self
    {
        return new self('The aggregate identifier can\'t be empty');
    }
}
