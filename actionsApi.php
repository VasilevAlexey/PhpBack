<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> test </title>
</head>
<body>
<form action="actionsApi.php" method="post">
    <p>первое число: <input type="text" name="a" /></p>
    <p>второе число: <input type="text" name="b" /></p>
    <p><input type="submit" name="sum" value="GO" /></p>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sum'])) {
    func();
}
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
function func() {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = $a + $b;
    $fOut = ".";
    if ($c >= 0) {
        $factorial = factorial($c);
        $fOut =  ". Её факториал равен " . (string)$factorial . ".";
    }
    $outString = "Сумма чисел равна " . (string)$c . $fOut;
    echo $outString;
}
?>
</body>
</html>
