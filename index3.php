<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$Discount_Amount = 0;
$Discount_Price = 0;
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $sanPham = $_POST["SanPham"];
    $giaNiemYet = trim($_POST["GiaNiemYet"]);
    $chietKhau = trim($_POST["ChietKhau"]);
    $Discount_Amount = $giaNiemYet * $chietKhau * 0.1;
    $Discount_Price = $giaNiemYet - $Discount_Amount;
    echo "gia".$Discount_Amount;
    echo "thanh toan". $Discount_Price;
}

?>
</body>
</html>