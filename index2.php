<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method = "post" >
        <label> quantity :</label>
        <input type="number" name="quantity" ><br>
        <input type="submit" value="oder">
        
    </form>
</body>
</html> -->
<!-- <?php
$item = "proten";
$price = 100;
$quantity = $_POST["quantity"];
$total = null ;
$total = $price * $quantity;
echo "you have ordered {$quantity} plates of {$item} your total bill is {$total} thanks for shoping<br>";
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method = "post" >
        <label> x :</label>
        <input type="text" name="x" ><br>
        <label> y :</label>
        <input type="text" name="y" ><br>
        <label> z :</label>
        <input type="text" name="Z" ><br>
        <input type="submit" value="total"><br>
        
</body>
</html>
<?php
// $x = $_POST["x"];
// $total = null ;
// // $total = abs($x);
// $total = round($x);
// echo "hello {$total} <br>";
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null ;
// $total = $x + $y;
// echo $total;
echo max($x,$y,$z);

?>