<?php

namespace Ecommerce\Common\DTOs\Order;

class OrderData
{
    public function __construct(
        public readonly string $productId,
        public readonly int $quantity,
        public readonly float $totalPrice,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['productId'],
            $data['quantity'],
            $data['totalPrice'],
        );
    }
}
