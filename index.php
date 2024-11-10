<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета опитування</title>
</head>
<body>

<h2>Анкета опитування: Оцінка сервісу обслуговування</h2>

<form action="process_survey.php" method="POST">
    <!-- Ім'я респондента -->
    <label for="name">Ваше ім’я:</label>
    <input type="text" id="name" name="name" required><br><br>

    <!-- Email респондента -->
    <label for="email">Ваш email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <!-- Питання 1: Оцінка обслуговування -->
    <label>Як ви оцінюєте наш сервіс обслуговування?</label><br>
    <input type="radio" id="excellent" name="service_rating" value="excellent" required>
    <label for="excellent">Відмінно</label><br>
    <input type="radio" id="good" name="service_rating" value="good">
    <label for="good">Добре</label><br>
    <input type="radio" id="satisfactory" name="service_rating" value="satisfactory">
    <label for="satisfactory">Задовільно</label><br>
    <input type="radio" id="poor" name="service_rating" value="poor">
    <label for="poor">Погано</label><br><br>

    <!-- Питання 2: Якість продукції -->
    <label for="product_quality">Як ви оцінюєте якість нашої продукції?</label><br>
    <select id="product_quality" name="product_quality" required>
        <option value="very_high">Дуже висока</option>
        <option value="high">Висока</option>
        <option value="average">Середня</option>
        <option value="low">Низька</option>
    </select><br><br>

    <!-- Питання 3: Коментарі -->
    <label for="comments">Ваші коментарі чи пропозиції:</label><br>
    <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

    <button type="submit">Надіслати</button>
</form>

</body>
</html>
