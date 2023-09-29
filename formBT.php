<!DOCTYPE html>
<html>
<head>
    <title>Đếm số lần xuất hiện của kí tự</title>
</head>
<body>
    <h1>Đếm số lần xuất hiện của kí tự</h1>
    <form method="post" action="">
        <label for="inputString">Nhập chuỗi:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // Xử lý khi người dùng nhấn submit
    if (isset($_POST['submit'])) {
        // Lấy chuỗi từ input
        $inputString = $_POST['inputString'];
        // Tạo một mảng để lưu trữ số lần lặp lại của các kí tự
        $charCount = array();
        // Lặp qua chuỗi và đếm số lần xuất hiện của từng kí tự
        for ($i = 0; $i < strlen($inputString); $i++) {
            $char = $inputString[$i];
            // Nếu kí tự đã xuất hiện trước đó, tăng số lần lặp lại lên 1
            if (array_key_exists($char, $charCount)) {
                $charCount[$char]++;
            } else {
                // Nếu kí tự chưa xuất hiện, thêm vào mảng và đặt số lần lặp lại là 1
                $charCount[$char] = 1;
            }
        }
        // Hiển thị kết quả
        echo "<h2>Kết quả:</h2>";
        foreach ($charCount as $char => $count) {
            echo "Kí tự '$char' xuất hiện $count lần<br>";
        }
    }
    ?>
</body>
</html>