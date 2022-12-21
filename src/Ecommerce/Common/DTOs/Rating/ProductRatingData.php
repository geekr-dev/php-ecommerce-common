<?php

namespace Ecommerce\Common\DTOs\Rating;

class ProductRatingData
{
    public function __construct(
        public readonly string $productId,
        public readonly float $score,
    ) {
    }
}
