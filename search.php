<?php
if (isset($_GET['product'])) {
    $product = $_GET['product'];
    echo "Searching for product: " . htmlspecialchars($product);
} else {
    echo "No product specified.";
}
?>
