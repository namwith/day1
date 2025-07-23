<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính chu vi tam giác</title>
</head>
<body>
    <h1>Tính chu vi của tam giác</h1>

    <form action="" method="post">
        <label for="sideA">Chiều dài cạnh a: </label>
        <input type="number" name="sideA" id="sideA" required /><br><br>
        
        <label for="sideB">Chiều dài cạnh b: </label>
        <input type="number" name="sideB" id="sideB" required /><br><br>
        
        <label for="sideC">Chiều dài cạnh c: </label>
        <input type="number" name="sideC" id="sideC" required /><br><br>
        
        <input type="submit" value="Tính chu vi" />
    </form>

    <?php
    if (isset($_POST['sideA']) && isset($_POST['sideB']) && isset($_POST['sideC'])) {
        $a = $_POST['sideA'];
        $b = $_POST['sideB'];
        $c = $_POST['sideC'];

        // Hàm tính chu vi tam giác
        function calculatePerimeter($a, $b, $c) {
            return $a + $b + $c; // Tính chu vi
        }

        // Gọi hàm và hiển thị kết quả
        $perimeter = calculatePerimeter($a, $b, $c);
        echo '<h2>Chu vi của tam giác là: ' . $perimeter . '</h2>';
    }
    ?>
</body>
</html>
