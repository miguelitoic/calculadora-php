<?php
$val_op1 = "num";
$valor1 = "";
$val_op2 = "op";
$valor2 = "";

if (isset($_POST["num"])) {
    $num = $_POST["input"] . $_POST["num"];
} else {
    $num = "";
}
if (isset($_POST["op"])) {
    $valor1 = $_POST["input"];
    setcookie($val_op1, $valor1, time() + (86400 * 30), "/");

    $valor2 = $_POST["op"];
    setcookie($val_op2, $valor2, time() + (86400 * 30), "/");
    $num = "";
}
if (isset($_POST["borrar"])) {
    $num = "";
}

if (isset($_POST["igual"])) {
    $num = $_POST["input"];

    switch ($_COOKIE["op"]) {
        case "+":
            $result = $_COOKIE["num"] + $num;
            break;

        case "-":
            $result = $_COOKIE["num"] - $num;
            break;

        case "*":
            $result = $_COOKIE["num"] * $num;
            break;

        case "/":
            $result = $_COOKIE["num"] / $num;
            break;
    }
    $num = $result;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>

<body>
    <div class="contenedor d-flex f-column center">
        <div>
            <h1><i>Calculadora con PHP</i></h1>
            <br>
        </div>
        <form action="" method="post">
            <div class="calculadora">
                <input type="text" class="pantalla" name="input" value="<?php echo @$num ?>">
                <input type="submit" class="c large transparente" name="borrar" value="C">
                <input type="submit" class="div large" name="op" value="/">
                <input type="submit" class="mult large" name="op" value="*">
                <input type="submit" class="res large" name="op" value="-">
                <input type="submit" class="7 large" name="num" value="7">
                <input type="submit" class="8 large" name="num" value="8">
                <input type="submit" class="9 large" name="num" value="9">
                <input type="submit" class="sum large" name="op" value="+">
                <input type="submit" class="4 large" name="num" value="4">
                <input type="submit" class="5 large" name="num" value="5">
                <input type="submit" class="6 large" name="num" value="6">
                <input type="submit" class="1 large" name="num" value="1">
                <input type="submit" class="2 large" name="num" value="2">
                <input type="submit" class="3 large" name="num" value="3">
                <input type="submit" class="igual large" name="igual" value="=">
                <input type="submit" class="cero large" name="num" value="0">
                <input type="submit" class="punto large" name="num" value=".">
            </div>
        </form>
    </div>
</body>

</html>