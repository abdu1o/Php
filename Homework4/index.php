<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Product;
use App\ProductService;

$productService = new ProductService();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'], $_POST['price'])) {
    $productService->addProduct(new Product($_POST['name'], (float)$_POST['price']));
}

$searchedProduct = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search'])) {
    $searchedProduct = $productService->searchByName($_POST['search']);
}

$products = $productService->getAllProducts();

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h2>Add product</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="price" step="0.01" placeholder="Price" required>
        <button type="submit">Add</button>
    </form>

    <h2>Products list</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= $product ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Search product</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Enter name">
        <button type="submit">Search</button>
    </form>

    <?php if ($searchedProduct): ?>
        <h3>Found:</h3>
        <p><?= $searchedProduct ?></p>
    <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search'])): ?>
        <p>Product not found</p>
    <?php endif; ?>
</body>
</html>
