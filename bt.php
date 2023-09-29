<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* đếm số lần xuất hiện
    $chuoi = "glory glory man united, glory glory man united";
    $ptu = "g";
    $xuat_hien = substr_count($chuoi,$ptu);
    echo $xuat_hien; */
    



    $chuoi = "glory glory man united, glory glory man united";
    $mang_ki_tu = str_split($chuoi);
    foreach ($mang_ki_tu as $ki_tu) {
        echo $ki_tu. "\n";
    }
    echo "<br>";
    foreach (count_chars($chuoi, 1) as $i => $val) {
        echo " Ký tự \"" , chr($i) , "\" được lặp lại $val lần trong chuỗi. \n"."<br>";
    }
    ?>
</body>
</html>