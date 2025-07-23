<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Check Even or Odd</h1>

    <form action="" method="post">
        <label for="number">Nhập số: </label>
        <input type="number" name="number" id="number" required />
        <input type="submit" value="Kiểm tra" />
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Kiểm tra số chẵn hay lẻ
        if ($number % 2 == 0) {
            echo '<h2 style="color:green;">Số ' . $number . ' là số chẵn.</h2>';
        } else {
            echo '<h2 style="color:red;">Số ' . $number . ' là số lẻ.</h2>';
        }
    }
    ?>
</body>
</html>
