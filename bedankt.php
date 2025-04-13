<?php
include("includes/header.php");
?>

<?php
session_start();
?>

<div class="hero">
   <img src="assets/img/icons/logo.png" alt="Logo">
</div>


<body>
    <div class="thank-you-container">
        <h1>Bedankt voor je bestelling!</h1>
        <p>We hebben je bestelling ontvangen en zullen deze zo snel mogelijk verwerken.</p>

        <div class="order-details">
            <h2>Jouw gegevens:</h2>
            <ul>
                <li><strong>Naam:</strong> <?php echo htmlspecialchars($_POST['firstname'] ?? ''); ?> <?php echo htmlspecialchars($_POST['middlename'] ?? ''); ?> <?php echo htmlspecialchars($_POST['lastname'] ?? ''); ?></li>
                <li><strong>E-mailadres:</strong> <?php echo htmlspecialchars($_POST['email'] ?? ''); ?></li>
                <li><strong>Telefoonnummer:</strong> <?php echo htmlspecialchars($_POST['phone'] ?? ''); ?></li>
                <li><strong>Postcode:</strong> <?php echo htmlspecialchars($_POST['postcode'] ?? ''); ?></li>
                <li><strong>Huisnummer:</strong> <?php echo htmlspecialchars($_POST['housenumber'] ?? ''); ?> <?php echo htmlspecialchars($_POST['housenumberadd'] ?? ''); ?></li>
            </ul>
        </div>

        <div class="order-details">
            <h2>Bestelde producten:</h2>
            <ul>
                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $productId => $product) {
                        echo '<li>' . htmlspecialchars($product['name']) . ' - €' . htmlspecialchars($product['price']) . ' x ' . htmlspecialchars($product['quantity']) . '</li>';
                    }
                } else {
                    echo '<li>Geen producten in de winkelwagen.</li>';
                }
                ?>
            </ul>
        </div>

        <div class="thank-you-footer">
            <p>Je ontvangt een bevestiging per e-mail. Heb je vragen? Neem contact op met onze klantenservice.</p>
            <a href="index.php" class="button">Terug naar Home</a>
        </div>
    </div>
</body>

<?php
include("includes/footer.php");
?>