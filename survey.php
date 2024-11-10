<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат анкети</title>
</head>
<body>

<h2>Дякуємо за участь в опитуванні!</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service_rating = htmlspecialchars($_POST['service_rating']);
    $product_quality = htmlspecialchars($_POST['product_quality']);
    $comments = htmlspecialchars($_POST['comments']);

    echo "<p>Ім’я респондента: $name</p>";
    echo "<p>Email респондента: $email</p>";
    echo "<p>Оцінка обслуговування: $service_rating</p>";
    echo "<p>Якість продукції: $product_quality</p>";
    echo "<p>Коментарі: $comments</p>";
} else {
    echo "<p>Помилка: дані форми не відправлені належним чином.</p>";
}
?>

</body>
</html>
