<?php

namespace Ecommerce\Common\Events\Order;

use Ecommerce\Common\DTOs\Order\OrderData;
use Ecommerce\Common\Enums\Events;
use Ecommerce\Common\Events\Event;

class OrderCreateEvent extends Event
{
    const TYPE = Events::ORDER_CREATED;

    public function __construct(
        public readonly OrderData $data,
    ) {
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'data' => $this->data
        ];
    }
}
