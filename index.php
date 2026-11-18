
<?php
$name = 'Carl';
$price = 5;

$nutrition = [
    'fat' => 36,
    'sugar' => 51,
    'salt' => 0.25,
    'fiber' => 2.1
];

$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly beans'];

$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>The Candy Store</h1>
    <p>Making every day sweeter!</p>
</header>

<main>
    <h2>Welcome <?php echo $name; ?>!</h2>
    <p>Your candy costs $<?php echo $price; ?> per pack.</p>

    <h2>Nutrition (per 100g)</h2>
    <?php foreach ($nutrition as $item => $amount): ?>
        <p><?php echo ucfirst($item) . ': ' . $amount; ?></p>
    <?php endforeach; ?>

    <h2>Best Sellers</h2>
    <ul>
        <?php foreach ($best_sellers as $candy): ?>
            <li><?php echo $candy; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Special Offers</h2>
    <?php foreach ($offers as $candy): ?>
        <div class="candy">
            <h3><?php echo $candy['name']; ?></h3>
            <p>Price: $<?php echo $candy['price']; ?></p>
            <p>Stock: <?php echo $candy['stock']; ?></p>

            <?php if ($candy['stock'] > 100): ?>
                <p class="available">Available</p>
            <?php elseif ($candy['stock'] > 0): ?>
                <p class="low">Low Stock</p>
            <?php else: ?>
                <p class="out">Out of Stock</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</main>

<footer>
    <p>&copy; 2026 The Candy Store/Carl</p>
</footer>

</body>
</html>
