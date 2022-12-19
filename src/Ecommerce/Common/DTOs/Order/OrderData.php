<?php

namespace Ecommerce\Common\DTOs\Order;

class OrderData
{
    public function __construct(
        public readonly string $productId,
        public readonly int $quantity,
    ) {
    }
}
