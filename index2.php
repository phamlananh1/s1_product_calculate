<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h2>Tinh chiet khau cho san pham</h2>
<form action="index2.php" method="post">
    <input type="text" name="SanPham" placeholder="Nhap san pham">
    <input type="text" name="GiaNiemYet" placeholder="Gia niem yet san pham">
    <input type="text" name="ChietKhau" placeholder="Chiet khau san pham">
    <input type="button" name="tinh" value="tinh">
</form>
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