<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm số nguyên âm trong chuỗi</title>
</head>
<body>
    <h1>Đếm số nguyên âm</h1>

    <form action="" method="post">
        <label for="inputString">Nhập chuỗi: </label>
        <input type="text" name="inputString" id="inputString" required />
        <input type="submit" value="Đếm nguyên âm" />
    </form>

    <?php
    if (isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];

        // Hàm đếm số nguyên âm
        function countVowels($string) {
            $vowels = 'aeiouAEIOU'; // Danh sách nguyên âm
            $count = 0; // Biến đếm

            // Duyệt qua từng ký tự trong chuỗi
            for ($i = 0; $i < strlen($string); $i++) {
                if (strpos($vowels, $string[$i]) !== false) {
                    $count++; // Tăng biến đếm nếu ký tự là nguyên âm
                }
            }
            return $count; // Trả về số nguyên âm
        }

        // Gọi hàm và hiển thị kết quả
        $vowelCount = countVowels($inputString);
        echo '<h2>Số nguyên âm trong chuỗi là: ' . $vowelCount . '</h2>';
    }
    ?>
</body>
</html>
