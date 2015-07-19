<?php

session_start();

$result = 0;

if(isset($_POST['add']))
    $result = $_POST['num1'] + $_POST['num2'];
elseif(isset($_POST['subtract']))
    $result = $_POST['num1'] - $_POST['num2'];
elseif(isset($_POST['multiply']))
    $result = $_POST['num1'] * $_POST['num2'];
elseif(isset($_POST['divide']))
    $result = $_POST['num1'] / $_POST['num2'];
elseif(isset($_POST['exp']))
    $result = pow($_POST['num1'],$_POST['num2']);

if(isset($_SESSION['result']))
    if(isset($_POST['memplus']))
        $result = $_SESSION['result'] + $_POST['num1'];
    elseif(isset($_POST['memminus']))
        $result = $_SESSION['result'] - $_POST['num1'];
    elseif(isset($_POST['reset']))
        session_unset();


$_SESSION['result'] = $result;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            ADVWEB1 - Exercise 6 Redux
        </title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <form action="calc.php" method="post" >
        <div class="calcbody">
            <div class="group1">
                <input type="text" name="num1" placeholder="Operand 1" class="input operand"><br>
                <input type="submit" name="add" value="+" class="btn op">
                <input type="submit" name="subtract" value="-" class="btn op">
                <input type="submit" name="multiply" value="*" class="btn op">
                <input type="submit" name="divide" value="/" class="btn op">
                <input type="submit" name="percent" value="%" class="btn op">
                <input type="submit" name="exp" value="x&#8319;" class="btn op">
                <input type="text" name="num2" placeholder="Operand 2" class="input operand"><br>
                <input type="button" name="equals" value="=" class="btn op">
                <input type="text" name="result" value="<?php echo $result; ?>" class="input result" readonly>
                <p>
                    M: <input type="text" name="memory" value="<?php echo $_SESSION['result']; ?>" class="input memory" readonly>
                </p>
            </div>
            <div class="group2">
                <input type="button" name="7" value="7" onclick="" class="btn num">
                <input type="button" name="8" value="8" onclick="" class="btn num">
                <input type="button" name="9" value="9" onclick="" class="btn num">
                <input type="button" name="4" value="4" onclick="" class="btn num">
                <input type="button" name="5" value="5" onclick="" class="btn num">
                <input type="button" name="6" value="6" onclick="" class="btn num">
                <input type="button" name="1" value="1" onclick="" class="btn num">
                <input type="button" name="2" value="2" onclick="" class="btn num">
                <input type="button" name="3" value="3" onclick="" class="btn num">
                <input type="button" name="0" value="0" onclick="" class="btn num zero">
                <input type="button" name="decimal" value="." onclick="" class="btn num">
                <p>
                    <input type="submit" name="memplus" value="M+" class="btn mem">
                    <input type="submit" name="memminus" value="M-" class="btn mem">
                    <input type="submit" name="reset" value="MC" class="btn mem">
                </p>
            </div>
        </div>
    </form>
    </body>
</html>
