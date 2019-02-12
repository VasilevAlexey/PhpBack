<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> test </title>
</head>
<body>
<form action="action.php" method="post">
    <p>первое число: <input type="text" name="a" /></p>
    <p>второе число: <input type="text" name="b" /></p>
    <p><input type="submit" name="sum" value="GO" /></p>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sum'])) {
    func();
}
function func() {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = $a + $b;
    $cString = "Сумма чисел равна " . (string)$c;
    echo $cString;
}
?>
</body>
</html>
