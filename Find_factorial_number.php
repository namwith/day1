<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính giai thừa</title>
</head>
<body>
    <h1>Tính giai thừa của một số</h1>

    <form action="" method="post">
        <label for="number">Nhập số (n): </label>
        <input type="number" name="number" id="number" min="0" required />
        <input type="submit" value="Tính" />
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Hàm tính giai thừa
        function factorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        // Tính giai thừa
        $result = factorial($number);

        echo '<h2 style="color:blue;">Giai thừa của ' . $number . ' là ' . $result . '.</h2>';
    }
    ?>
</body>
</html>
