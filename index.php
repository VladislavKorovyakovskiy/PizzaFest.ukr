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
        <div class="item slidebar"> <?php include('block/slider.php') ?> </div>
        <div class="item content"> <?php include('block/main_page.php') ?> </div>
        <div class="item sales"> <?php include('block/sales.php') ?> </div>
        <div class="item footer"> <?php include('block/footer.php') ?> </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>