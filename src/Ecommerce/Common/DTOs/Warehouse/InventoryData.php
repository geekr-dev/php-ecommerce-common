<?php

namespace Ecommerce\Common\DTOs\Warehouse;

class InventoryData
{
    public function __construct(
        public readonly string $productId,
        public readonly int $quantity,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['productId'],
            $data['quantity'],
        );
    }
}
