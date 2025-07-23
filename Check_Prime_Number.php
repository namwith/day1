<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số nguyên tố</title>
</head>
<body>
    <h1>Kiểm tra số nguyên tố</h1>

    <form action="" method="post">
        <label for="number">Nhập số (n): </label>
        <input type="number" name="number" id="number" min="1" required />
        <input type="submit" value="Kiểm tra" />
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Hàm kiểm tra số nguyên tố
        function isPrime($n) {
            if ($n <= 1) return false; // Số nhỏ hơn hoặc bằng 1 không phải là số nguyên tố
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false; // Nếu n chia hết cho i, không phải là số nguyên tố
                }
            }
            return true; // Nếu không chia hết cho bất kỳ số nào, là số nguyên tố
        }

        // Kiểm tra và hiển thị kết quả
        if (isPrime($number)) {
            echo '<h2 style="color:green;">' . $number . ' là số nguyên tố.</h2>';
        } else {
            echo '<h2 style="color:red;">' . $number . ' không phải là số nguyên tố.</h2>';
        }
    }
    ?>
</body>
</html>
