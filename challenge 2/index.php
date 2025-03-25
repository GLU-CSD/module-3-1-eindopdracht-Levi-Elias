<?php

$array = [
    "products" => [
        [
            "id" => "dbb233b9-2c53-49a5-90a4-d6ca9c762225",
            "title" => "Product 1",
            "category" => "Category 1",
            "price" => 10.00,
						"sale" => false,
            "photos" => [
                "photo1" => "image1.jpg",
                "photo2" => "image2.jpg",
                "photo3" => "image3.jpg"
            ]
        ],
        [
            "id" => "b5b1238a-17ee-4b0c-9e8b-0b72de2db0f6",
            "title" => "Product 2",
            "category" => "Category 1",
            "price" => 20.00,
						"sale" => 14.99,
            "photos" => [
                "photo1" => "image1.jpg",
                "photo2" => "image2.jpg",
                "photo3" => "image3.jpg"
            ]
        ],
	    [
            "id" => "b93844cd-ee68-4bde-89a1-5264de5052c0",
            "title" => "Product 3",
            "category" => "Category 2",
            "price" => 30.00,
						"sale" => 18.99,
            "photos" => [
                "photo1" => "image1.jpg",
                "photo2" => "image2.jpg",
                "photo3" => "image3.jpg"
            ]
        ]
    ],
	   "navigation" => [
        [
            "title" => "Home",
            "url" => "/"
        ],
        [
            "title" => "Producten",
            "url" => "/producten"
        ],
        [
            "title" => "Contact",
            "url" => "/contact"
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <?php
    foreach($array['navigation'] as $nav) {
        echo "<a href='" . $nav['url'] . "'>" . $nav['title'] . "</a>";
    }
    ?>
    </nav>
    <div class="products">
    <?php
    foreach($array['products'] as $product) {
        echo "<div class='product'>";
        echo "<h2>" . $product['title'] . "</h2>";
        if($product['sale']) {
            echo "<p>" . $product['sale'] . "</p>";
        }else{
            echo "<p>" . $product['price'] . "</p>";
        }
        
        foreach($product['photos'] as $photo) {
            echo "<img src='" . $photo . "' />";
        }
        echo "</div>";
    }
    ?>
    </div>

    <div class="categories">
    <?php
    $categories = [];
    foreach($array['products'] as $product) {
        if(!in_array($product['category'], $categories)) {
            $categories[] = $product['category'];
        }
    }
    foreach($categories as $category) {
        echo "<div class='category'>";
        echo "<h2>" . $category . "</h2>";
        echo "</div>";
    }
    ?>
    </div>
</body>
</html>