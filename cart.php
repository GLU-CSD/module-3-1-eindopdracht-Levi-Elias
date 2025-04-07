<?php
include("includes/header.php");
?>

<?php
include("includes/nav.php");
?>

<?php
session_start();

// Controleer of de winkelwagen al bestaat in de sessie
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // Maak een lege winkelwagen
}

// Voeg een product toe aan de winkelwagen
if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    // Controleer of het product al in de winkelwagen zit
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity']++;
    } else {
        $_SESSION['cart'][$productId] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
    }

    // Redirect naar cart.php om de bijgewerkte winkelwagen te tonen
    header("Location: cart.php");
    exit();
}

// Verwijder een product uit de winkelwagen
if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];
    unset($_SESSION['cart'][$productId]);
}

// Bereken het totaal
function calculateTotal()
{
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['price'] * $product['quantity'];
        }
    }
    return $total;
}

?>
<!DOCTYPE html>
<h2>Your Cart</h2>
<div class="cart">
    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $productId => $product): ?>
            <div class="product">
                <h3><?php echo $product['name']; ?></h3>
                <p>Price: €<?php echo $product['price']; ?></p>
                <p>Quantity: <?php echo $product['quantity']; ?></p>
                <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                    <button type="submit" name="remove_from_cart">Remove</button>
                </form>
            </div>
        <?php endforeach; ?>
        <div class="total">
            <h3>Total: €<?php echo calculateTotal(); ?></h3>
            <a href="bestel.php">
                <button type="button">Proceed to Checkout</button>
            </a>
        </div>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

<?php
include("includes/footer.php");
?>

</html>