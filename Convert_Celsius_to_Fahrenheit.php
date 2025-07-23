<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi Celsius sang Fahrenheit</title>
</head>
<body>
    <h1>Chuyển đổi Celsius sang Fahrenheit</h1>

    <form action="" method="post">
        <label for="celsius">Nhập nhiệt độ (Celsius): </label>
        <input type="number" name="celsius" id="celsius" step="0.1" required />
        <input type="submit" value="Chuyển đổi" />
    </form>

    <?php
    if (isset($_POST['celsius'])) {
        $celsius = $_POST['celsius'];

        // Chuyển đổi Celsius sang Fahrenheit
        $fahrenheit = ($celsius * 9/5) + 32;

        echo '<h2 style="color:blue;">Nhiệt độ ' . $celsius . '°C tương đương với ' . $fahrenheit . '°F.</h2>';
    }
    ?>
</body>
</html>
