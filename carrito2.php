<?php
session_start();

$productos = [
    1 => ['name' => 'Producto 1', 'price' => 10],
    2 => ['name' => 'Producto 2', 'price' => 15],
    3 => ['name' => 'Producto 3', 'price' => 20],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product'];
    $product = $productos[$productId];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $product;
}

header('Location: carrito_compras.php');