<?php
require "../db_connect/config.php";
$rootPath = (dirname(__DIR__) . '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>PizzaFest</title>
</head>

<body>
    <div class="container-index">
        <div class="item header"> <?php include($rootPath . 'block/head.php') ?> </div>
        <div class="item navigarion"> <?php include($rootPath . 'block/navigarion.php') ?> </div>
        <div class="item product"> <!-- Основной блок -->
            <div class="special-offers-box">
                <?php
                $products = mysqli_query($connection, "SELECT * FROM `Product` WHERE `category_id` = 2"); ?>
                <?php while ($index = mysqli_fetch_assoc($products)) { ?>
                    <div class="special-offers">
                        <div id="id-product" style="display: none;"><?php echo $index['id'] ?></div>
                        <img src=<?php echo $index['img'] ?> alt="Пицца 1" class="offer-image">
                        <div class="offer-details">
                            <h3 class="offer-title"><?php echo $index['name'] ?></h3>
                            <p class="offer-description">
                                <b>Состав:</b> <?php echo $index['Ingredients'] ?>
                                <span id="hide"><b>Описание:</b> <?php echo $index['description'] ?></span> <br>
                            </p>
                        </div>
                        <div class="offer-buy">
                            <button class="product-button">Купить</button>
                            <span> <b id="price"><?php echo $index['price'] ?></b> грн</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="overlay" id="overlay">
                <div class="popup">
                    <div class="postContainer">
                    </div>
                </div>
            </div>
        </div>
        <div class="item footer">footer</div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/popup.js"></script>
        <script src="/js/script_btn_add_to_shop_cart.js"></script>
</body>

</html>