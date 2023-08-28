<?php
require "db_connect/config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>PizzaFest</title>
</head>

<body>
    <div class="container-index">
        <div class="item header"> <?php include('block/head.php') ?> </div>
        <div class="item navigarion"> <?php include('block/navigarion.php') ?> </div>
        <div class="item shoping_cart">
        <div class="no-item">
                    <p>Ваша корзина пуста.</p>Но это можно всегда исправить :&rpar;
                </div>
            <div class="shoping_cart_container">
                <?php $products = mysqli_query($connection, "SELECT * FROM `shoping_cart`"); ?>
                <?php while ($index = mysqli_fetch_assoc($products)) {
                    $productId = $index['product_id'];
                    $description = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `description` FROM `Product` WHERE `id` = '$productId'")); ?>
                    <div class="shoping_cart-box">
                        <div class="id-product-in-shoping-cart"><?php echo $index['product_id'] ?></div>
                        <div class="product_price-in-shoping-cart"><?php echo $index['product_price'] ?></div>
                        <div class="name-shoping-cart"><?php echo $index['product_name'] ?></div>
                        <div class="delete-shoping-cart"><span></span><span></span></div>
                        <div class="img-shoping-cart"><img src=<?php echo $index['product_img'] ?> alt="Пицца 1" class="offer-image"></div>
                        <div class="buttom-plus-minus-shoping-cart">
                            <div class="btn-minus-shoping-cart">
                                <span></span>
                            </div>
                            <span class="count"><?php echo $index['count'] ?></span>
                            <div class="btn-plus-shoping-cart">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="description-shoping-cart"><?php echo $description['description'] ?></div>
                        <div class="price-shoping-cart"><span class="all_price"><?php echo $index['all_price'] ?></span> грн.</div>
                    </div> <?php } ?>
            </div>
            <button class="send" type="submit">Оформить заказ <span id="full-price"></button>
        </div>
        <div class="item footer">footer</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/shoping_cart.js"></script>
</body>

</html>