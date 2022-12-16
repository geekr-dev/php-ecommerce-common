<?php

namespace Ecommerce\Common\DTOs\Product;

class CategoryData
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $name,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static($data['uuid'], $data['name']);
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
