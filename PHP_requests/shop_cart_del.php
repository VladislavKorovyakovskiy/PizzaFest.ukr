<?php
require "../db_connect/config.php";
$rootPath = (dirname(__DIR__) . '/');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["id"];
}?>

<?php
    $sql = "DELETE FROM `shoping_cart` WHERE `product_id` = $productId";
    if ($connection->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных.";
    } else {
        echo "Ошибка при добавлении данных: " . $connection->error;
    }
?>