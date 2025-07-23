<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số đối xứng</title>
</head>
<body>
    <h1>Kiểm tra số đối xứng</h1>

    <form action="" method="post">
        <label for="number">Nhập số: </label>
        <input type="number" name="number" id="number" required /><br><br>
        
        <input type="submit" value="Kiểm tra" />
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Hàm kiểm tra số đối xứng
        function isPalindrome($num) {
            // Chuyển số thành chuỗi và đảo ngược
            $reversed = strrev((string)$num);
            return $reversed === (string)$num; // So sánh chuỗi gốc với chuỗi đảo ngược
        }

        // Gọi hàm và hiển thị kết quả
        if (isPalindrome($number)) {
            echo '<h2>Kết quả: Palindrome</h2>';
        } else {
            echo '<h2>Kết quả: Not Palindrome</h2>';
        }
    }
    ?>
</body>
</html>
