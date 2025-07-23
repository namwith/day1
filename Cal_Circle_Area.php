<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình tròn</title>
</head>
<body>
    <h1>Tính diện tích hình tròn</h1>

    <form action="" method="post">
        <label for="radius">Nhập bán kính: </label>
        <input type="number" name="radius" id="radius" min="1" required /><br><br>
        
        <input type="submit" value="Tính diện tích" />
    </form>

    <?php
    if (isset($_POST['radius'])) {
        $radius = $_POST['radius'];

        // Hàm tính diện tích hình tròn
        function calculateArea($r) {
            return pi() * pow($r, 2); // Sử dụng công thức A = πr^2
        }

        // Gọi hàm và hiển thị kết quả
        $area = calculateArea($radius);
        echo '<h2>Diện tích hình tròn là: ' . htmlspecialchars(number_format($area, 2)) . '</h2>';
    }
    ?>
</body>
</html>
