<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <label for="chuoi">Nhập chuỗi:</label><br>
        <input type="text" id="chuoi" name="chuoi"><br><br>
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST["chuoi"];
        $mang_ki_tu = str_split($chuoi);
        foreach ($mang_ki_tu as $ki_tu) {
            echo $ki_tu."<br>";
        }
    }
    ?>
</body>
</html>