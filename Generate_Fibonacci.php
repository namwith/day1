<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Fibonacci Sequence</title>
</head>
<body>
    <h1>Generate Fibonacci Sequence</h1>

    <form action="" method="post">
        <label for="terms">Nhập số hạng n: </label>
        <input type="number" name="terms" id="terms" min="1" required /><br><br>
        
        <input type="submit" value="Tạo dãy Fibonacci" />
    </form>

    <?php
    if (isset($_POST['terms'])) {
        $n = $_POST['terms'];

        // Hàm tạo dãy Fibonacci
        function generateFibonacci($n) {
            $fibonacci = [];
            $fibonacci[0] = 0; // Số hạng đầu tiên
            if ($n > 1) {
                $fibonacci[1] = 1; // Số hạng thứ hai
            }
            for ($i = 2; $i < $n; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; // Tính số hạng tiếp theo
            }
            return $fibonacci;
        }

        // Gọi hàm và hiển thị kết quả
        $fibonacciSequence = generateFibonacci($n);
        echo '<h2>Dãy Fibonacci đến ' . $n . ' số hạng:</h2>';
        echo implode(', ', $fibonacciSequence);
    }
    ?>
</body>
</html>
