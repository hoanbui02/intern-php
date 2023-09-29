<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>làm quen php</h1>
<?php
/* bai toan tinh giai thua
$a = 5;
$b = 10; 
$c = 0;
function tinhgiaithua($n) {
   $giaithua = 1;
   if ($n == 0 || $n == 1) {
    return $giaithua;
   } else {
    for ($i = 2; $i <= $n; $i++) {
        $giaithua *= $i;
    }
    return $giaithua;
   }
}
echo " Giai thừa của ".$a." là: ".tinhgiaithua($a)."<br>";
echo " Giai thừa của ".$b." là: ".tinhgiaithua($b)."<br>";
echo " Giai thừa của ".$c." là: ".tinhgiaithua($c)."<br>"; */

/* bài toán tính dãy fibonaci
function fibonaci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
    if ($n < 0) {
        return -1;
    } elseif ($n == 1 || $n == 0) {
        return $n;
    } else {
        for ($i = 2; $i < $n; $i++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
echo "10 số đầu tiên của dãy fibonaci là: ";
for ($i =0; $i<10; $i++) {
    echo fibonaci($i)." ";
} */

/* bài toán số nguyên tố
function songuyento($n) {
    if ($n < 2) {
        return false;
    } 
        $sqrtn = sqrt($n);
        for ($i = 2; $i < $sqrtn; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Các số nguyên tố nhỏ hơn 100 là: <br>";
    for ($i = 0; $i < 100; $i++) {
        if (songuyento($i)) {
            echo "$i"." ";
        }
    } */

    
        $n = "";
        if (isset ( $_POST [$n] )) {
            $n = $_POST ["n"];
        }
        function demsotu($chuoi) {
            $mang_ki_tu = str_split($chuoi);
            foreach ($mang_ki_tu as $ki_tu) {
                echo $ki_tu. "\n";
            }
        echo "<br>";
        foreach (count_chars($chuoi, 1) as $i => $val) {
            echo " Ký tự \"" , chr($i) , "\" được lặp lại $val lần trong chuỗi. \n"."<br>";
        }

            
        }
?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập n: </td>
            <td><input type="string" name="n" value="<?=$n?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>
<?php
if (is_numeric ( $GLOBALS ["n"] )) {
    demsotu ( $GLOBALS ["n"] );
}
?>
</body>
</html>