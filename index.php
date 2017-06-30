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

function funcCount()
{
    static $count = 0;
    $count++;
    echo $count;
}

for ($i = 0; $i < 5; $i++) {
    funcCount();
}

require_once "footer.html";


?>
</body>
</html>