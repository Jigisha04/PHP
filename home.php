<html>
  <body>
    <h1>Welcome to php</h1>
<!-- standard tag -->
<?php
echo "Hello World";
?>
<!-- short eco tag -->
 <?="Welcome to PHP";?>
 <!-- addition -->
 <?php
echo 10+10;
?>
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
<?php
$a=10;
echo $a;
var_dump($a);
var_dump(5);
echo"<br>";
var_dump("hello");
echo"<br>";
var_dump(10.5);
echo"<br>";
var_dump(5,6,7);
echo"<br>";
var_dump(null);
echo"<br>";
echo<<<FINISH
Example document.
FINISH;
echo"<br>";
$fruits=array("apple","mango","orange");
var_dump($fruits);
echo"<br>";
$intArray=array(10,20,30);
echo"First Element:$intArray[0]\n";
echo"Second Element:$intArray[1]\n";
echo"Third Element:$intArray[2]\n";
echo"<br>";
var_dump($intArray);
echo"<br>";
$fruits=['apple','banana','orange'];
$person=['name'=>'John','age'=>30,'location'=>'New York'];
echo $person['name'];
echo"<br>";
$handle=fopen("note.txt","r");
var_dump($handle);
echo"<br>";
?>
<?php
$a=NULL;
echo($a);
var_dump($a);
echo"<br>";
$b="hello world";
$b=NULL;
var_dump($b);
echo"<br>";
define("PI",3.1459);
echo" The value of pi is ",PI,"<br>";

// case-sensitive constant name
define("WISHES", "Good Evening");
echo WISHES. "<br>";
echo constant("WISHES") ;
echo"<br>";
//both are similar
echo"The line number is: ",__line__;
echo"<br>";
echo"The file is: ",__file__;
echo"<br>";
// echo __class__;
// echo __function__;
// echo __method__;
echo"The PHP version is: ",PHP_VERSION;
echo"<br>";
define("courses", [
    "PHP",
    "HTML",
    "CSS"
]);
echo courses[0];
$x = 10;
$y = 4;
echo($x + $y); // 0utputs: 14
echo "<br>";
echo($x - $y); // 0utputs: 6
echo "<br>";
echo($x * $y); // 0utputs: 40
echo "<br>";
echo($x / $y); // 0utputs: 2.5
echo "<br>";
echo($x % $y); // 0utputs: 2
echo "<br>";
echo($x ** $y); // 0utputs: 10000
echo $x; // Outputs: 10
echo "<br>";
$x = 20;
$x += 30;
echo $x; // Outputs: 50
echo "<br>";
$x = 50;
$x -= 20;
echo $x; // Outputs: 30
echo "<br>";
$x = 5;
$x *= 25;
echo $x; // Outputs: 125
echo "<br>";
$x = 50;
$x /= 10;
echo $x; // Outputs: 5
echo "<br>";
$x = 100;
$x %= 15;
echo $x; // Outputs: 10
//Comparison Operator
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); 
var_dump($x === $z); 
var_dump($x != $y); 
var_dump($x !== $z); 
var_dump($x < $y); 
var_dump($x > $y); 
var_dump($x <= $y); 
var_dump($x >= $y); 
//Increment/Decrement Operator
echo "<br>";
$x = 10;
echo ++$x;  
echo "<br>";
echo $x; 
echo "<br>";
$x = 10;
echo $x++; 
echo "<br>";
echo $x; 
echo "<br>";
$x = 10;
echo --$x; 
echo "<br>";
echo $x; 
echo "<br>";
$x = 10;
echo $x--; 
echo "<br>";
echo $x; 
echo "<br>";
//String Operator
$x = "Hello";
$y = " World!";
echo $x . $y; 
echo "<br>";
$x .= $y;
echo $x;
echo "<br>";
echo $status = (empty($user)) ? "anonymous" : $user;
echo "<br>";
$user = "Michael";
echo $status = (empty($user)) ? "anonymous" : $user;
echo "<br>";
$x = 1;
$status = ($x % 2 == 0) ? "even" : "odd";
echo $status;
echo "<br>";

$num=13;
if($num%2==0){
echo "$num is even number";
}else{
echo "$num is odd number";
}
echo "<br>";

$d = date("D");
if($d == "Fri"){
echo "Have a nice weekend!";
} elseif($d == "Sun"){
echo "Have a nice Sunday!";
} else{
echo "Have a nice day!";
}
echo "<br>";

$marks=69;
if ($marks<33){
echo "fail";
}
else if ($marks>=34 && $marks<50) {
echo "D grade";
}
else if ($marks>=50 && $marks<65) {
echo "C grade";
}
else if ($marks>=65 && $marks<80) {
echo "B grade";
}
else if ($marks>=80 && $marks<90) {
echo "A grade";
}
else if ($marks>=90 && $marks<100) {
echo "A+ grade";
}
else {
echo "Invalid input";
}
echo "<br>";

$age = 23;
$nationality = "Indian";
//applying conditions on nationality and age
if ($nationality == "Indian")
{
if ($age >= 18) {
echo "Eligible to give vote";
}
else {
echo "Not eligible to give vote";
}
}
echo "<br>";

$ch = 'k';
switch($ch){
case 'a':
echo 'It is a vowel';
break;
case 'e':
echo 'It is a vowel';
break;
case 'i':
echo 'It is a vowel';
break;
case 'o':
echo 'It is a vowel';
break;
case 'u':
echo 'It is a vowel';
break;
default:
echo 'It is a consonant';
}
echo "<br>";
$author = "Stephen King";

$book ="The silence of the lambs";

switch($author)

{

case "JK Rowling":

{

switch($book)

{

case "Harry Potter1";

echo "Harry Potter1, The price is 300$";

break;

case "Harry Potter2";

echo "Harry Potter2, The price is 200$";

break;

default;
echo "Author found but not the book";
}
}
break;
case "Stephen King":
{
switch($book)
{
case "Hannibal";
echo "Hannibal, The price is 500$";
break;
case "The silence of the lambs";
echo "The silence of the lambs, The price is 700$";
break;
default:
echo "Author found but not the book";
}
}
break;
default:
echo "Author not found";
}
echo "<br>";

?>
</body>
</html>