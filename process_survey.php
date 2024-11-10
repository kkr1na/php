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

    // Створення папки "survey" у разі її відсутності
    $directory = "survey";
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    // Генерація імені файлу з датою і часом
    $timestamp = date("Y-m-d_H-i-s");
    $filename = "$directory/response_$timestamp.json"; // Для JSON
    //$filename = "$directory/response_$timestamp.txt"; // Для текстового файлу

    // Формування даних для збереження
    $response_data = [
        "name" => $name,
        "email" => $email,
        "service_rating" => $service_rating,
        "product_quality" => $product_quality,
        "comments" => $comments,
        "submitted_at" => date("Y-m-d H:i:s") // Додавання дати і часу заповнення форми
    ];

    // Збереження даних у JSON-форматі
    file_put_contents($filename, json_encode($response_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Відображення дати і часу заповнення форми для користувача
    $submission_time = date("Y-m-d H:i:s");
    echo "<p>Ваш відгук успішно збережений.</p>";
    echo "<p>Дата і час заповнення форми: $submission_time</p>";

} else {
    echo "<p>Помилка: дані форми не відправлені належним чином.</p>";
}
?>

</body>
</html>
