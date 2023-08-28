<?php
require "../db_connect/config.php";
$rootPath = (dirname(__DIR__) . '/');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameProduct = $_POST["name"];
    $price = $_POST["price"];
    $contValue = $_POST["cont"];
    $product_id = $_POST["id"];
    $product_img = $_POST["imgValue"];
}?>



<?php
    $sql = "INSERT INTO `shoping_cart` (`product_id`, `product_img`, `product_name`, `product_price`, `count`, `all_price`) VALUES ('$product_id', '$product_img', '$nameProduct', '$price', '$contValue', '$price') ON DUPLICATE KEY UPDATE count = count + 1, all_price = product_price * count;";
    if ($connection->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных.";
    } else {
        // echo "Ошибка при добавлении данных: " . $connection->error;
    }
?>