<?php

namespace App;
use App\Product;

class ProductService
{
    private string $filePath;

    public function __construct()
    {
        $this->filePath = __DIR__ . 'products.json';
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([]));
        }
    }

    public function getAllProducts(): array
    {
        $json = file_get_contents($this->filePath);
        $data = json_decode($json, true);
        return array_map(fn($item) => new Product($item['name'], $item['price']), $data);
    }

    public function addProduct(Product $product): void
    {
        $products = $this->getAllProducts();
        $products[] = $product;
        file_put_contents($this->filePath, json_encode($products));
    }

    public function searchByName(string $name): ?Product
    {
        foreach ($this->getAllProducts() as $product) {
            if (strcasecmp($product->name, $name) === 0) {
                return $product;
            }
        }
        return null;
    }
}