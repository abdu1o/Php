<?php

namespace App;

class Product
{
    public function __construct(
        public string $name,
        public float $price
    ) {}

    public function __toString(): string
    {
        return "{$this->name} \${$this->price}";
    }

    public function __serialize(): array
    {
        return ['name' => $this->name, 'price' => $this->price];
    }

    public function __unserialize(array $data): void
    {
        $this->name = $data['name'];
        $this->price = $data['price'];
    }
}