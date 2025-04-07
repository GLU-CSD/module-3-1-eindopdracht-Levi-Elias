<?php
include("includes/header.php");
?>

<?php
include("includes/nav.php");
?>

<?php
include("includes/body.php"); // Zorg ervoor dat de $products-array beschikbaar is
?>

<?php
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Zoek het product op basis van de id
    $product = null;
    foreach ($products as $p) {
        if ($p['id'] === $productId) {
            $product = $p;
            break;
        }
    }

    // Als het product bestaat, toon de details
    if ($product) {
        ?>
        <div class="product-detail-container">
            <div class="product-detail">
                <h1><?php echo $product['name']; ?></h1>

                <!-- Image Slider -->
                <div class="image-slider">
                    <button id="prev" class="arrow">←</button>
                    <img id="shoe-image" src="<?php echo $product['photos']['photo1']; ?>" alt="<?php echo $product['name']; ?>">
                    <button id="next" class="arrow">→</button>
                </div>

                <p><strong>Price:</strong> €<?php echo $product['price']; ?></p>
                <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                <p><strong>Category:</strong> <?php echo ucfirst($product['category']); ?></p>
                <p><strong>Type:</strong> <?php echo ucfirst($product['type']); ?></p>

                <!-- Add to Cart Form -->
                <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <script>
            // Pass the PHP array to JavaScript
            const images = <?php echo json_encode($product['photos']); ?>;
        </script>
        <?php
    } else {
        // Als het product niet bestaat, toon een foutmelding
        echo "<p>Product not found.</p>";
    }
} else {
    // Als er geen id is meegegeven, toon een foutmelding
    echo "<p>No product selected.</p>";
}

include("includes/footer.php");
?>
<script src="assets/js/slider.js"></script>