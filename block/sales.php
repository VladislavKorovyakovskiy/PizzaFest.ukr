<h2>Горячие акции и специальные предложения</h2>
<div class="special-offers-box">
    <?php
    $products = mysqli_query($connection, "SELECT * FROM `Product` WHERE `category_id` = 1"); ?>
    <?php while ($index = mysqli_fetch_assoc($products)) { ?>
        <div class="special-offers">
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