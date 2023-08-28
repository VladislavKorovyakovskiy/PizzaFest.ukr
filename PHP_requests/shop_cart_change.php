<?php
require "../db_connect/config.php";
$rootPath = (dirname(__DIR__) . '/');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $countNewValue = $_POST["count"];
    $productId = $_POST["id"];
    $Price = $_POST["price"];
}?>

<?php
    $sql = "UPDATE `shoping_cart` SET `count` = '$countNewValue', `all_price` = '$countNewValue' * '$Price' WHERE `product_id` = $productId";
    if ($connection->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных.";
    } else {
        echo "Ошибка при добавлении данных: " . $connection->error;
    }
?>