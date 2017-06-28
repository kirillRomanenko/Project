<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>
<h1>Hello world!</h1>
<?php
//$dat = date("d.m.y");
//echo "$dat";

//$dat = date("h:i:s");
//echo "$dat";

//for ($i=1; $i<=5; $i++){
//    echo ($i * $i * $i);
//}

//$MY_VAR=5.2345;
//echo gettype($MY_VAR);

//$VAR=5.2345;
//if (isset($VAR)){
//    echo "Переменная существует. $VAR";
//}
//else{
//    echo "Переменная не существует.";
//}

//$VAR=5;
//echo $VAR;
//unset($VAR);
//echo $VAR;

//define("pi", 3.14);
//echo pi;

//$a=array('a' => 'apple', 'b' => 'car', 'c' => 'dog');
//print_r($a);

//$a="Hello";
//echo $a[0];

//$x = -17;
//$x = $x < 0 ? - $x : $x;
//echo $x;

//$items = 11;
//if ($items < 10){
//    echo "меньше 10";
//}
//else {
//    echo "больше либо равно 10";
//}

//while ($i < 32){
//  echo  $i += 1; //   $i = $i + 1;
//}

//$x = 1;
//do{
//    echo  "$x\t";
//}
//while($x++ < 10);

//for ($x = 0; $x <= 10; $x++){
//    echo "$x\t";
//}

foreach ($_SERVER as $k => $v){
    echo "<b>$k</b> => <b>$v</b><br>";
}



?>
</body>
</html>