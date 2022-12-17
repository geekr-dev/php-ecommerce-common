<?php

namespace Ecommerce\Common\Events\Rating;

use Ecommerce\Common\DTOs\Rating\ProductRatingData;
use Ecommerce\Common\Enums\Events;
use Ecommerce\Common\Events\Event;

class ProductRatedEvent extends Event
{
    const TYPE = Events::PRODUCT_RATED;

    public function __construct(
        public readonly ProductRatingData $data
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
