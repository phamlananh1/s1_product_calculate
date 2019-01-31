<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:230px; width:320px;
        margin:1px 42%;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<?php
$Discount_Amount = 0;
$Discount_Price = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Product = $_POST["PD"];
    $List_Price = trim($_POST["List"]);
    $Discount = trim($_POST["Discount"]);
    $Discount_Amount = $List_Price * $Discount * 0.1;
    $Discount_Price = $List_Price - $Discount_Amount;
}
?>
<form method="post">
    <div class="display">
        <h2>Product Discount Calculator</h2>
        <label>Product Description: </label>
        <span><?php echo $Product?></span><br/>
        <label>Price: </label>
        <span><?php echo $List_Price?></span><br/>
        <label>Discount Percent: </label>
        <span><?php echo $Discount?></span><br/>
        <label>Discount Amount: </label>
        <span><?php echo $Discount_Amount?></span><br/>
        <label>Discount Price: </label>
        <span><?php echo $Discount_Price?></span>
    </div>
</form>
</body>
</html>