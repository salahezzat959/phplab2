<?php
//~ Task 1 

echo nl2br("Hello \n Word ");

//~ Task 2

$str = "Hello World!";
echo chop($str,"World!"). "<br>";
echo trim($str,"Hed!")."<br>";
echo strtolower("Hello WORLD.") ."<br>";
echo strtoupper("hello world."). "<br>";
echo str_ireplace("World!","There",$str);

//~Task 3

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

//~Task 4

$arr1 =[12,45,10,25];
echo"The sum of the array is equal  ".array_sum($arr1)."<br>";
echo"The avarage of the array is equal  ". array_sum($arr1)/count($arr1) ."<br>";
rsort($arr1);
// print_r($arr1);
foreach ($arr1 as $value) {
    echo "value is $value <br>";
}

//~Task 5

$arr2 =["sara" =>31 ,"john" => 41, "walaa" => 39 ,"ramy" => 40];
//? ascending by value 
sort($arr2);
foreach ($arr2 as $value ){
    echo " the value is $value <br>";
}
// //? descending by value
rsort($arr2);
foreach ($arr2 as $value ){
    echo " the value is $value <br>";
}
//? ascending by key 
arsort($arr2);
foreach ($arr2 as $key ){
    echo " the value is $key <br>";
}
//?descending by key
krsort($arr2);
foreach ($arr2 as $key ){
    echo " the value is $key <br>";
}

?>