<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm số lần xuất hiện của kí tự</title>
</head>
<body>
    <h1>Đếm số lần xuất hiện của kí tự</h1>
    <form action="" method="post">
        <label for="inputString">Nhập chuỗi:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];
        $array = str_split($inputString);
        foreach ($array as $array1) {
            echo $array1. "\n";
        }
        echo "<br>";
        foreach (count_chars($inputString, 1) as $i => $val) {
            echo "Kí tự \"" , chr($i) , "\" được lặp lại $val lần trong chuỗi. \n"."<br>";
        }
        
    }
    ?>
</body>
</html>