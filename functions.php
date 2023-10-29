<?php

function readGet(): void
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['add_to_cart']) && is_numeric($_GET['add_to_cart'])) {
            switch ($_GET['add_to_cart']) {
                case 36:
                    addToCart(36);
                    break;
                case 46:
                    addToCart(46);
                    break;
                case 58:
                    addToCart(58);
                    break;
                case 32:
                    addToCart(32);
                    break;
                default:
                    header('location: index.php');
            }
        }
    }
}

function addToCart(int $product): void
{
    if (!isset($_SESSION['product' . $product])) {
        $_SESSION['product' . $product] = 0;
    }
    $_SESSION['product' . $product] += 1;
}

function showCart(array $catalog): array
{
    $result = [];
    foreach ($catalog as $product => $desc) {
        if (isset($_SESSION['product' . $product])) {
            $result['product' . $product] = [
                'name' => $desc['name'],
                'qty' => $_SESSION['product' . $product]
            ];
        }
    }
    return $result;
}
