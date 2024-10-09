<html>
<body>
<?php
$arr1=array(10,"asd",1.55,true);
$arr2=array("one"=>1,"two"=>2,"three"=>3);
$arr3=array(array(10,20,30),array("ten","twenty","thirty"),array("physics"=>70,"chemistry"=>30,"maths"=>50));
var_dump($arr1);
print_r($arr1);
echo "</br>";
var_dump($arr2);
print_r($arr2);
echo "</br>";
var_dump($arr3);
print_r($arr3);
echo "</br>";

$courses = array("PHP", "Laravel", "Node js"); 
echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2];
echo "<br>";
echo count($courses);
echo "<br>";
$courseslength = count($courses);
for($x = 0; $x <$courseslength; $x++) {
  echo $courses[$x];
  echo "<br>";
}
foreach($courses as $course){
  echo $course . "<br>";
}
$courses = array("INT220"=>"PHP", "INT221"=>"Laravel",
"INT222"=>"Node js");
echo "INT 220 is ".$courses['INT220'].". INT 221 is
".$courses['INT221'].". INT222 is ".$courses['INT222'];
echo "<br>";
$stuArray=array("name"=>"Jigisha Sharma", "reg"=>12112392, "email"=>"jigishasharma04@gmail.com");
echo "My name is ".$stuArray['name'].". Reg no. is ".$stuArray['reg'];
echo "<br>";

$result = array(
  array("Shreya",7.8,"pass"),
  array("Dikshant",8.5,"pass"),
  array("Aditya",4.9,"fail")
);
echo $result[0][0]. "----CGPA is: " . $result[0][1]." and his status is ".$result[0][2]."<br>";
echo $result[1][0]. "----CGPA is: " . $result[1][1]." and his status is ".$result[1][2]."<br>";
echo $result[2][0]. "----CGPA is: "  . $result[2][1]." and his status is ".$result[2][2];

echo "<br>";

for ($row = 0; $row < 3; $row++) {
  echo "<h4>Row number $row</h4>";
  for ($col = 0; $col < 3; $col++) {
    echo $result[$row][$col]."<br>";
  }
}
$fruits=array("Apple", "Banana", "Orange");
sort($fruits);
print_r($fruits);
echo "<br>";
asort($fruits);
print_r($fruits);
echo "<br>";
arsort($fruits);
print_r($fruits);
echo "<br>";
rsort($fruits);
print_r($fruits);
echo "<br>";
ksort($fruits);
print_r($fruits);
echo "<br>";
krsort($fruits);
print_r($fruits);
echo "<br>";
$numbers=array(1,2,3);
print_r($numbers);
echo "<br>";
array_push($numbers,4,5);
print_r($numbers);
echo "<br>";

//array_chunk
$courses=array("PHP","Laravel","Node
js","HTML","CSS","ASP.NET");
print_r(array_chunk($courses,2));
$name=array("Manoj","Rahul","Aneesh");
echo "<br>";
//array_combine
$marks=array("75","89","44");
$c=array_combine($name,$marks);
print_r($c);
echo "<br>";
//array_count_values
$a=array("Block 33","Block 34","Block 34","Block 36","Block
36");
print_r(array_count_values($a));
echo "<br>";
//array_diff
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yello
w");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magenta","i"=>"seagreen");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
// array_flip
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yello
w");
$result=array_flip($a1);
print_r($result);
echo "<br>";
if(is_numeric("123")){
  echo "true";
} 
else{echo "false";}

echo "tan(deg2rad(45)=", tan(deg2rad(45)), "<br>";
echo "pw(4,3)=", pow(4,3),"<br>"; 
echo "floor(3.1459)=", floor(3.1459), "<br>";
echo "dechex(16)=", dechex(16), "<br>";
echo abs(-5), "<br>";
echo sin(30), "<br>";
echo sin(30), "<br>";
echo tan(30), "<br>";
echo sqrt(2), "<br>";
echo log(2), "<br>";
echo ceil(10.578), "<br>";
echo floor(10.578), "<br>";
echo max(10,20,30), "<br>";
echo min(10,20,30), "<br>";
echo "<br>";
// $input=readline("Enter numbers: ");

$angle = readline("Enter angle for tan(deg2rad()): ");
echo "tan(deg2rad($angle)) = " . tan(deg2rad($angle)) . "\n";

$base = readline("Enter base for pow(): ");
$exp = readline("Enter exponent for pow(): ");
echo "pow($base, $exp) = " . pow($base, $exp) . "\n";

$number = readline("Enter a number for floor(): ");
echo "floor($number) = " . floor($number) . "\n";

$decimal = readline("Enter a decimal number for dechex(): ");
echo "dechex($decimal) = " . dechex($decimal) . "\n";

$abs_value = readline("Enter a number for abs(): ");
echo "abs($abs_value) = " . abs($abs_value) . "\n";

$sin_value = readline("Enter an angle for sin(): ");
echo "sin($sin_value) = " . sin(deg2rad($sin_value)) . "\n";

$tan_value = readline("Enter an angle for tan(): ");
echo "tan($tan_value) = " . tan(deg2rad($tan_value)) . "\n";

$sqrt_value = readline("Enter a number for sqrt(): ");
echo "sqrt($sqrt_value) = " . sqrt($sqrt_value) . "\n";

$log_value = readline("Enter a number for log(): ");
echo "log($log_value) = " . log($log_value) . "\n";

$ceil_value = readline("Enter a number for ceil(): ");
echo "ceil($ceil_value) = " . ceil($ceil_value) . "\n";

$floor_value = readline("Enter a number for floor(): ");
echo "floor($floor_value) = " . floor($floor_value) . "\n";

$max_values = readline("Enter numbers separated by commas for max(): ");
$max_array = explode(',', $max_values);
echo "max($max_values) = " . max($max_array) . "\n";

$min_values = readline("Enter numbers separated by commas for min(): ");
$min_array = explode(',', $min_values);
echo "min($min_values) = " . min($min_array) . "\n";

$timezone_identifiers = DateTimeZone::listIdentifiers();
foreach($timezone_identifiers as $key => $list) {
    echo $list . "<br>";
}

echo "The time in " .date_default_timezone_get() . "is " . date("H:i:s");
date_default_timezone_set("Asia/Calcutta");
echo "The time in " . date_default_timezone_get() . "is " . date("H:i:s");
echo "<br>";
Function welcMsg()
{
  echo "Hello welcome!";
}
welcMsg();

function StudentsName($firstname){
  echo "$firstname<br>";
}
StudentsName("Jai");
StudentsName("Helen");
StudentsName("Stella");
StudentsName("Kamal");
StudentsName("Bob");

function addition(&$val)
{
  $val += 10;
}
$number=5;
addition($number);
echo $number;
echo "<br>";
function add(int $a, int $b) {
  return $a+$b;
  }
  echo "5 + 10 = " . add(5,10) . "<br>";
  echo "7 + 13 = " . add(7,13) . "<br>";
  echo "2 + 4 = " . add(2,4);
?>
</body>
</html>
