<?php
require "../db_connect/config.php";
$rootPath = (dirname(__DIR__) . '/');
?>

<?php
$sql = "DELETE FROM `shoping_cart`";
if ($connection->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при добавлении данных: " . $connection->error;
}

$sql = "ALTER TABLE `shoping_cart` AUTO_INCREMENT = 1;";
if ($connection->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при добавлении данных: " . $connection->error;
}
?>