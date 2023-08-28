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
        <div class="item contact">
            <div class="main">

                <p>"Погрузитесь в ароматный мир вкусов и откройте новые гастрономические горизонты вместе с нами! Приходите в наш ресторан, где каждый блюдо - это уникальное путешествие в мир вкусов и наслаждений. Ваш стол уже ждет вас, чтобы наполнить этот день невероятными вкусами и незабываемыми моментами. Добро пожаловать в оазис кулинарных удовольствий!"</p>
                <hr class="hr-contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84662.2374644877!2d34.9177854173927!3d48.462382801272575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe303fd08468f%3A0xa1cf3d5f2c11aba!2z0JTQvdC10L_RgCwg0JTQvdC10L_RgNC-0L_QtdGC0YDQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1sru!2sua!4v1691505530153!5m2!1sru!2sua" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <hr class="hr-contact">
                <button id="callButton">Позвонить: +380-99-999-99-99</button>

            </div>
        </div>
        <div class="item footer">footer</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>