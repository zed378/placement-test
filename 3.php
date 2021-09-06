<?php
$a = "= * ";
$b = "* = ";
$string = ["D", "U", "M", "B", "W", "A", "Y", "S", "I", "D"];
$c = count($string);
$d = str_repeat($a, $c / 2)  . "<br>";
$e = str_repeat($b, $c / 2) . "<br>";

function flag()
{
    global $string;
    global $c;
    global $d;
    global $e;
    if ($c > 0) {
        echo str_repeat($d, 2);
        echo str_repeat($e, 1);
        foreach ($string as $str) {
            echo $str;            
        }
        echo "<br>";
        echo str_repeat($e, 1);
        echo str_repeat($d, 2);
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid text-center">
        <?= flag(); ?>
    </div>
</body>
</html>