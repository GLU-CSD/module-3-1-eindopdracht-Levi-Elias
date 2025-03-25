<?php
 include("includes/header.php");
?>

<?php
  include("includes/nav.php");
?>

<body>
    <h2>Cart</h2>
    <div class="cart">
        <div class="product">
            <img src="assets/img/jordan 4s/Black Cat 4.png" alt="Sneaker 1">
            <h3>Air Jordan 4 'Black Cat'</h3>
            <p>€1000</p>
            <button>Remove</button>
        </div>
        <div class="product">
            <img src="assets/img/jordan 4s/Fear 4.png" alt="Sneaker 2">
            <h3>Air Jordan 4 Retro 'Fear'</h3>
            <p>€210</p>
            <button>Remove</button>
        </div>
        <div class="product">
            <img src="assets/img/jordan 4s/White Thunder4.png" alt="Sneaker 3">
            <h3>Air Jordan 4 'White Thunder'</h3>
            <p>€210</p>
            <button>Remove</button>
        </div>

        <div class="placeOrder">
            <h3>Total: €1420</h3>
            <a href="bestel.php"><button>Place Order</button></a>
        </div>
    </div>
</body>

<?php
 include("includes/footer.php");
?>

</html>