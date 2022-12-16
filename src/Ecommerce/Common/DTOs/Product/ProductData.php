<?php

namespace Ecommerce\Common\DTOs\Product;

class ProductData
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $name,
        public readonly string $description,
        public readonly float $price,
        public readonly CategoryData $category,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['uuid'] ?? '',
            $data['name'],
            $data['description'],
            $data['price'],
            new CategoryData(
                $data['category']['uuid'],
                $data['category']['name'] ?? ''
            ),
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
