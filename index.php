<?php
//$cookie_name = "user";
//$cookie_value = "cookie user";
//setcookie($cookie_name, $cookie_value, time() + 86400);

$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);
echo $counter;

?>


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

<!--<form action="" method="get">-->
<!--    <p>Ваше имя: <input type="text" name="name"></p>-->
<!--    <p>Ваш возраст: <input type="text" name="age"></p>-->
<!--    <p><input type="submit"></p>-->
<!--</form>-->
<!--Привет --><?php //echo htmlspecialchars($_GET["name"]);?><!--.-->
<!--Вам --><?php //echo htmlspecialchars($_GET["age"]);?><!-- лет.-->


<!--<form action="--><?php //echo htmlentities($_SERVER['PHP_SELF']) ?><!--" method="get">-->
<!---->
<!--    <fieldset>-->
<!--        <legend>Выберите животное</legend>-->
<!--        <label for="dog">-->
<!--            <input type="checkbox" id="dog" name="animal[]" value="собака">-->
<!--            Собака-->
<!--        </label>-->
<!--        <label for="cat">-->
<!--            <input type="checkbox" id="cat" name="animal[]" value="кошка">-->
<!--            Кошка-->
<!--        </label>-->
<!--        <label for="fox">-->
<!--            <input type="checkbox" id="fox" name="animal[]" value="лиса">-->
<!--            Лиса-->
<!--        </label>-->
<!--    </fieldset>-->
<!--    <input type="submit" value="Отправить">-->
<!---->
<!--</form>-->


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

//foreach ($_SERVER as $k => $v){
//    echo "<b>$k</b> => <b>$v</b><br>";
//}

//$name["Ivanov"] = "Alex ";
//$name["Wilsher"] = "Jeff ";
//$name["Spectr"] = "Harvey";
////for ($i = 0; $i < count($name); $i++){
////    echo "$name[$i]";
////}
//echo $name["Spectr"];
//$number = count($name);
//echo $number;
//$first = ["first", "second"];
//$second = ["dog", "cat"];
//$all = $first + $second;
//for ($i = 0; $i < count($all); $i++) {
//    echo $all[$i];
//}
//$birth = ["John" => "29.09.1985", "Billy" => "05.04.1994"];
//foreach ($birth as $k => $v) {
//    echo "$k Родился $v <br>";
//}

require_once "head.html";

//function mySqr($n)
//{
//    return $n * $n;
//}
//
//$value = mySqr(5);
//echo $value;

//function funcCount()
//{
//    static $count = 0;
//    $count++;
//    echo $count;
//}
//
//for ($i = 0; $i < 5; $i++) {
//    funcCount();
//}

require_once "footer.html";
//$animal = isset($_GET['animal']) ? $_GET['animal'] : '';
//if (!empty($animal)) {
//    echo '<br><br> Выбраны: ';
//    foreach ($animal as $a) {
//        echo "<span style=\"color: green\">" . htmlentities($a) . "</span>";
//    }
//}


//if (!isset($_COOKIE[$cookie_name])) {
//    echo "cookie named $cookie_name";
//    echo "cookie value $cookie_value";
//}

?>
</body>
</html>