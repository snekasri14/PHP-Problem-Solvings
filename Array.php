<?php
// product prices
$prices = array(200, 150, 275, 550, 1000);

// Calculate the total price of all products
$totalPrice = array_sum($prices);
echo "Total Price: $" . number_format($totalPrice, 2) . "\n";

// Find the maximum and minimum prices
$maxPrice = max($prices);
$minPrice = min($prices);
echo "Maximum Price: $" . number_format($maxPrice, 2) . "\n";
echo "Minimum Price: $" . number_format($minPrice, 2) . "\n";

// Sort the prices in ascending order
sort($prices);
echo "Sorted Prices: ";
foreach ($prices as $price) {
    echo "$" . number_format($price, 2) . " ";
}
echo "\n";

// Array of product names
$products = array("Keyboard", "Mouse", "Monitor", "Headphones", "Speakers");

// Combine product names with prices
$productPrices = array_combine($products, $prices);
print_r($productPrices);

// Check if a product exists in the array
$product = "Mouse";
if (in_array($product, $products)) {
    echo "$product is available.\n";
} else {
    echo "$product is not available.\n";
}

// Count the number of products
$productCount = count($products);
echo "Number of Products: " . $productCount . "\n";

// Extract a portion of the products array
$subset = array_slice($products, 1, 3);
echo "Subset of Products: ";
print_r($subset);

// Remove an element from the products array
$removedProduct = array_splice($products, 2, 1);
echo "Removed Product: " . $removedProduct[0] . "\n";
echo "Remaining Products: ";
print_r($products);
?>
