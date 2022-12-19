<?php

namespace Ecommerce\Common\Events\Warehouse;

use Ecommerce\Common\DTOs\Warehouse\InventoryData;
use Ecommerce\Common\Enums\Events;
use Ecommerce\Common\Events\Event;

class InventoryUpdatedEvent extends Event
{
    const TYPE = Events::INVENTORY_UPDATED;

    public function __construct(
        public readonly InventoryData $data,
    ) {
    }

    public function toArray(): array
    {
        return [
            'type' => self::TYPE,
            'data' => $this->data,
        ];
    }
}
