<?php
include("includes/header.php");
?>

<?php
include("includes/nav.php");
?>

<body>

  <button class="openbtn" onclick="toggleSidebar()">☰ Filters</button>

  <div class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">×</a>
    <h2>Filter Products</h2>
    <form id="filter-form">
      <label for="price-range">Price Range:</label>
      <input type="range" id="price-range" name="price-range" min="0" max="1000" step="10" value="1000"
        oninput="updatePriceRange(this.value)">
      <span id="price-range-value">€0 - €1000</span>

      <label for="category">Category:</label>
      <select id="category" name="category">
        <option value="all">All</option>
        <option value="jordan1s">Air Jordan 1</option>
        <option value="jordan3s">Air Jordan 3</option>
        <option value="jordan4s">Air Jordan 4</option>
        <option value="jordan11s">Air Jordan 11</option>
      </select>

      <label for="shoe-type">Shoe Type:</label>
      <select id="shoe-type" name="shoe-type">
        <option value="all">All</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="unisex">Unisex</option>
      </select>

      <button type="submit">Apply Filters</button>
    </form>
  </div>

  <h2>The Collection</h2>


  <?php
  $products = array(
    [
      "id" => "product1",
      "name" => "Air Jordan 4 'Black Cat'",
      "price" => 1000,
      "img" => "assets/img/jordan 4s/Black Cat 4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product2",
      "name" => "Air Jordan 4 Retro 'Fear'",
      "price" => 210,
      "img" => "assets/img/jordan 4s/Fear 4.png",
      "category" => "jordan4s",
      "type" => "male"
    ],
    [
      "id" => "product3",
      "name" => "Air Jordan 4 'White Thunder'",
      "price" => 210,
      "img" => "assets/img/jordan 4s/White Thunder4.png",
      "category" => "jordan4s",
      "type" => "male"
    ],
    [
      "id" => "product4",
      "name" => "Air Jordan 4 Retro SE 'Black Canvas'",
      "price" => 304,
      "img" => "assets/img/jordan 4s/Black Canvas4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product5",
      "name" => "Air Jordan 4 Retro 'Military Black'",
      "price" => 336,
      "img" => "assets/img/jordan 4s/M.Black4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product6",
      "name" => "Air Jordan 4 Retro 'Midnight Navy'",
      "price" => 259,
      "img" => "assets/img/jordan 4s/M.Navy4.png",
      "category" => "jordan4s",
      "type" => "male"
    ],
    [
      "id" => "product7",
      "name" => "Air Jordan 4 Retro 'Cool Grey'",
      "price" => 428,
      "img" => "assets/img/jordan 4s/Cool Grey4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product8",
      "name" => "PSG x Air Jordan 4 'Paris Saint Germain'",
      "price" => 428,
      "img" => "assets/img/jordan 4s/PSG 4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product9",
      "name" => "Air Jordan 4 'Oxidized Green'",
      "price" => 167,
      "img" => "assets/img/jordan 4s/Oxidized green4.png",
      "category" => "jordan4s",
      "type" => "male"
    ],
    [
      "id" => "product10",
      "name" => "Air Jordan 4 Retro 'University Blue'",
      "price" => 430,
      "img" => "assets/img/jordan 4s/Uni Blue 4.png",
      "category" => "jordan4s",
      "type" => "unisex"
    ],
    [
      "id" => "product11",
      "name" => "Air Jordan 3 Retro 'Black Cat'",
      "price" => 204,
      "img" => "assets/img/jordan 3s/Black Cat 3.png",
      "category" => "jordan3s",
      "type" => "male"
    ],
    [
      "id" => "product12",
      "name" => "Air Jordan 3 Retro 'Black Cement'",
      "price" => 240,
      "img" => "assets/img/jordan 3s/Black Cement 3.png",
      "category" => "jordan3s",
      "type" => "male"
    ],
    [
      "id" => "product13",
      "name" => "Air Jordan 3 Retro 'Pine Green'",
      "price" => 248,
      "img" => "assets/img/jordan 3s/Pine Green 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product14",
      "name" => "Air Jordan 3 Retro 'Midnight Navy'",
      "price" => 248,
      "img" => "assets/img/jordan 3s/M. Navy 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product15",
      "name" => "Air Jordan 3 Retro 'Wizards'",
      "price" => 173,
      "img" => "assets/img/jordan 3s/Wizzards 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product16",
      "name" => "Air Jordan 3 WMNS 'Off Noir'",
      "price" => 265,
      "img" => "assets/img/jordan 3s/Off Noir 3.png",
      "category" => "jordan3s",
      "type" => "female"
    ],
    [
      "id" => "product17",
      "name" => "Air Jordan 3 Retro 'Palomino'",
      "price" => 223,
      "img" => "assets/img/jordan 3s/Palomino 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product18",
      "name" => "Air Jordan 3 Retro 'Fire Red' - 2022",
      "price" => 217,
      "img" => "assets/img/jordan 3s/Fire Red 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product19",
      "name" => "Air Jordan 3 'Dark Iris'",
      "price" => 227,
      "img" => "assets/img/jordan 3s/Dark Iris 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product20",
      "name" => "Air Jordan 3 Chicago All-Star 'Red Cement'",
      "price" => 224,
      "img" => "assets/img/jordan 3s/Red Cement 3.png",
      "category" => "jordan3s",
      "type" => "unisex"
    ],
    [
      "id" => "product21",
      "name" => "Air Jordan 1 Satin WMNS 'Bred'",
      "price" => 95,
      "img" => "assets/img/jordan 1s/Bred 1.png",
      "category" => "jordan1s",
      "type" => "female"
    ],
    [
      "id" => "product22",
      "name" => "Air Jordan 1 Mid 'Diamond Shorts'",
      "price" => 140,
      "img" => "assets/img/jordan 1s/Diamond Shorts 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product23",
      "name" => "Air Jordan 1 High OG WMNS 'Metallic Gold'",
      "price" => 190,
      "img" => "assets/img/jordan 1s/M. Gold 1.png",
      "category" => "jordan1s",
      "type" => "female"
    ],
    [
      "id" => "product24",
      "name" => "Air Jordan 1 High OG 'Midnight Navy'",
      "price" => 114,
      "img" => "assets/img/jordan 1s/M. Navy 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product25",
      "name" => "Air Jordan 1 High OG WMNS 'Latte'",
      "price" => 103,
      "img" => "assets/img/jordan 1s/Latte 1.png",
      "category" => "jordan1s",
      "type" => "female"
    ],
    [
      "id" => "product26",
      "name" => "Air Jordan 1 Retro High OG 'UNC Toe'",
      "price" => 190,
      "img" => "assets/img/jordan 1s/UNC Toe 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product27",
      "name" => "Air Jordan 1 High OG 'Washed Black'",
      "price" => 154,
      "img" => "assets/img/jordan 1s/Washed Black 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product28",
      "name" => "Air Jordan 1 High Retro OG 'White Cement'",
      "price" => 98,
      "img" => "assets/img/jordan 1s/White Cement 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product29",
      "name" => "Air Jordan 1 High '85 'Metallic Burgundy'",
      "price" => 110,
      "img" => "assets/img/jordan 1s/M. Burgundy 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product30",
      "name" => "Air Jordan 1 Retro High OG 'Bloodline'",
      "price" => 195,
      "img" => "assets/img/jordan 1s/Bloodline 1.png",
      "category" => "jordan1s",
      "type" => "unisex"
    ],
    [
      "id" => "product31",
      "name" => "Air Jordan 11 Adapt 'White'",
      "price" => 627,
      "img" => "assets/img/jordan 11s/Adapt White 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product32",
      "name" => "Air Jordan 11 Retro WMNS 'Bred Velvet'",
      "price" => 213,
      "img" => "assets/img/jordan 11s/Bred Velvet 11.png",
      "category" => "jordan11s",
      "type" => "female"
    ],
    [
      "id" => "product33",
      "name" => "Air Jordan 11 'Cherry'",
      "price" => 233,
      "img" => "assets/img/jordan 11s/Cherry 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product34",
      "name" => "Air Jordan 11 'Concord'",
      "price" => 375,
      "img" => "assets/img/jordan 11s/Concord 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product35",
      "name" => "Air Jordan 11 Retro 'Cool Grey'",
      "price" => 310,
      "img" => "assets/img/jordan 11s/Cool Grey 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product36",
      "name" => "Air Jordan 11 Retro 'Gratitude'",
      "price" => 289,
      "img" => "assets/img/jordan 11s/Gratitude 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product37",
      "name" => "Air Jordan 11 Retro 'Jubilee'",
      "price" => 248,
      "img" => "assets/img/jordan 11s/Jubilee 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ],
    [
      "id" => "product38",
      "name" => "Air Jordan 11 Retro 'Legend Blue' - 2024",
      "price" => 219,
      "img" => "assets/img/jordan 11s/Legend Blue 11.png",
      "category" => "jordan11s",
      "type" => "male"
    ],
    [
      "id" => "product39",
      "name" => "Air Jordan 11 Retro WMNS 'Neapolitan'",
      "price" => 119,
      "img" => "assets/img/jordan 11s/Neapolitan 11.png",
      "category" => "jordan11s",
      "type" => "female"
    ],
    [
      "id" => "product40",
      "name" => "Air Jordan 11 Retro 'Platinum Tint'",
      "price" => 365,
      "img" => "assets/img/jordan 11s/Platinum TInt 11.png",
      "category" => "jordan11s",
      "type" => "unisex"
    ]
  );
  ?>

  <div class="product-grid">
    <?php
    foreach ($products as $product) {
      echo "<div class='product' data-price='" . $product["price"] . "' data-category='" . $product["category"] . "' data-shoe-type='" . $product["type"] . "'>";
      echo "<img src='" . $product["img"] . "' alt='" . $product["name"] . "'>";
      echo "<h3>" . $product["name"] . "</h3>";
      echo "<p>Price: €" . $product["price"] . "</p>";
      echo "<a href='productdetail.php?id=" . $product["id"] . "'>View Details</a>";
      echo "</div>";
    }
    ?>
  </div>
</body>



<?php
include("includes/footer.php");
?>
<script src="assets/js/filter1.js"></script>

</html>