<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basic</title>
</head>
<body>
    <h1>làm quen php</h1>
    <?php
        // $fullname = "Bui Duc Hoan";
        // echo "xin chào, {$fullname}!";
        // $a = 10;
        // $b = 20;
        // echo $a + $b;
        // $is_login = false;
        // if ($is_login == true){
        //     echo "Chúc mừng bạn đã đăng nhập thành công";
        // }else{
        //     echo "Bạn vui lòng đăng nhập";
        // }
        // $n = 10000;
        // $sum = 0;
        // for($i=1; $i<=$n; $i++){
        //     if($i%2!=0){
        //         $sum = $sum + $i;
        //     }
        //     // echo $i."<br>";
        // }
        // echo $sum;

        // function total_odd($n){
        //     $sum = 0;
        //     for($i=1; $i<=$n; $i++){
        //         if($i%2!=0){
        //             $sum = $sum + $i;
        //         }
        //     }
        //     return $sum;
        // }
        // echo total_odd(3)."<br>";
        // echo total_odd(10)."<br>";
        // echo total_odd(1000)."<br>";

        // $student_1 = "Hoan";
        // $student_1 = "Hoan1";
        // $students = array("Hoan", "Hoan1");
        // $students[] = "Hoan2";
        // // print_r($students);

        // foreach($students as $item){
        //     echo $item."<br>";
        // }
        // function countwords($inputString)
        // {
        //     $words = explode(" ", $inputString);
        //     $wordCount = array_count_values($words);
        //     return $wordCount;
        // }
        
    //     $str2 = "php";
    //     $str = "trung tâm đào tạo lập trình $str2 tại hà nội";
    //     echo $str."<br>";   
        // define("hoan","haha");
        // define("hoann",1);
        // echo hoann."<br>";
        // echo hoan;
        // $bien1 = "8";
        // $bien2 = (int)$bien1;
        // var_dump($bien2);
        // for ($i = 0; $i < 20; $i++) {
        //     for ($j = (20-$i); $j<20; $j++) {
        //         echo "*";
        //     }
        //     echo "<br>";
        // }
        // for ($i = 0;$i < 5; $i++) {
        //     echo "<br>";
        //     for ($j = 0; $j < 20; $j++ ) {
        //         echo "*";
        //     }
        // }
        // for ($i = 1; $i <=100; $i++) {
        //     if ($i % 3 == 0 && $i % 5 == 0) {
        //         echo "fizzbuzz $i"."<br>";
        //     } elseif ($i % 5 == 0) {
        //         echo "buzz $i"."<br>";
        //     } elseif ($i % 3 == 0) {
        //         echo "fizz $i"."<br>";
        //     } else echo "$i"."<br>";
        // }
        // for ($i = 1; $i <= 10; $i++) {
        //     echo $i." x 2 = ".($i*2)."<br>";
        // }
        // khai báo các biến toàn cầu
        $heso_a = "";
        $heso_b = "";
        $heso_c = "";
        // đọc các hệ số từ form
        if (isset ( $_POST ["heso_a"] )) {
            $heso_a = $_POST ["heso_a"];
        }
        if (isset ( $_POST ["heso_b"] )) {
            $heso_b = $_POST ["heso_b"];
        }
        if (isset ( $_POST ["heso_c"] )) {
            $heso_c = $_POST ["heso_c"];
        }
        function giaiPTB2($a, $b, $c) {
            // kiểm tra biến đầu vào
            if ($a == "")
                $a = 0;
            if ($b == "")
                $b = 0;
            if ($c == "")
                $c = 0;
            // in phương trình ra màn hình
            echo " Phương trình: ".$a."x2 + ".$b."x + ".$c." = 0";
            echo "<br>";
            // kiếm tra các hệ số
            if ($a == 0) {
                if ($b == 0) {
                    if ($c == 0) {
                        echo "Phương trình có vô số nghiệm";
                    } else echo "Phương trình vô nghiệm";
                } else echo "Phương trình có 1 nghiệm duy nhất = ".(-$c/$b);
                return;
            }
            // tính delta
            $delta = $b*$b - 4*$a*$c;
            if ($delta < 0) {
                echo "Phương trình vô nghiệm";
            } elseif ($delta = 0) {
                echo "Phương trình có 2 nghiệm kép = ".(-$b/(2*$a));
            } else {
                echo "Phương trình có 2 nghiệm "."<br>";
                echo "Nghiệm 1: x1 = ".(-$b + sqrt($delta))/(2*$a);
                echo "Nghiệm 2: x2 = ".(-$b - sqrt($delta))/(2*$a);
            }
        }
        
        
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Hệ số bậc 2, a</td>
                <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
            </tr>
            <tr>
                <td>Hệ số bậc 1, b</td>
                <td><input type="text" name="heso_b" value="<?=$heso_b?>"/></td>
            </tr>
            <tr>
                <td>Hệ số tự do, c</td>
                <td><input type="text" name="heso_c" value="<?=$heso_c?>"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kết quả"></td>
            </tr>
        </table>

    </form>
    <br>
    <?php
    //gọi hàm giải ptb2
    // sử dụng từ khoá $GLOBALS để đọc các biến toàn cầu  và truyền vào hàm
    if (is_numeric ( $GLOBALS ["heso_a"] ) && is_numeric ( $GLOBALS ["heso_b"] ) && is_numeric ( $GLOBALS ["heso_c"] )) {
        giaiPTB2 ( $GLOBALS ["heso_a"], $GLOBALS ["heso_b"], $GLOBALS ["heso_c"] );
    } else {
        echo "Giá trị input không hợp lệ";
    }
    ?>

    <br><a href="ảnh nè"><img src="https://vcdn1-vnexpress.vnecdn.net/2019/07/30/anh-thien-nhien-dep-thang-7-1564483719.jpg?w=900&h=540&q=100&dpr=1&fit=crop&s=7oGih7QyOebpULhSWanykg"/></a>;
     <!-- <form action="login.php" method="POST">
    //     Tên : <br><input type="text" name="username"><br>
    //     Mật khẩu: <br><input type="password" name="password"><br>
    //     <input type="submit" value="Đăng nhập">
    // </form> --> -->
</body>
</html>