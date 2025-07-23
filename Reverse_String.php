<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đảo ngược chuỗi</title>
</head>
<body>
    <h1>Đảo ngược một chuỗi</h1>

    <form action="" method="post">
        <label for="inputString">Nhập chuỗi: </label>
        <input type="text" name="inputString" id="inputString" required /><br><br>
        
        <input type="submit" value="Đảo ngược chuỗi" />
    </form>

    <?php
    if (isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];

        // Hàm đảo ngược chuỗi
        function reverseString($str) {
            return strrev($str); // Sử dụng hàm strrev để đảo ngược chuỗi
        }

        // Gọi hàm và hiển thị kết quả
        $reversedString = reverseString($inputString);
        echo '<h2>Chuỗi đã đảo ngược là: ' . htmlspecialchars($reversedString) . '</h2>';
    }
    ?>
</body>
</html>
