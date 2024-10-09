<html>
  <body>
<?php
$comment="<h1>Hey there! How are you doing today?<h1>";
    $sanitizedComment=filter_var($comment, FILTER_SANITIZE_STRING);
    echo $sanitizedComment;

echo "<br>";

$int =20;
    if(filter_var($int.FILTER_VALIDATE_INT))
    {
      echo"The <b>$int</b> is a valid integer";
    }
    else{
      echo"The <b>$int</b> is not a valid integer";
    }
echo "<br>";
$ip = "255.255.255.0";  
    
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "The IP address <b>$ip</b> is valid.";
    } else {
        echo "The IP address <b>$ip</b> is not valid.";
    }
echo "<br>";    
       
$email = "jigisha.s@gmail.com";  
    $sanitizedEmail=filter_var($email, FILTER_SANITIZE_EMAIL);
    if ($email==$sanitizedEmail && filter_var($ip, FILTER_VALIDATE_EMAIL)) {
        echo "The $email is valid email address.";
    } else {
        echo "The $email is not a valid email address..";
    }
    echo "<br>";    
      
$url = "https://example.com";  
    $sanitizedUrl=filter_var($url, FILTER_SANITIZE_URL);
    if ($url==$sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)) {
        echo "The $url is valid website.";
    } else {
        echo "The $url is not a valid  website.";
    } 
    echo "<br>";    
         
    // to validate whether the supplied value of integer is an integer or not. as wel as  whether it lies within the range of 0 to 100 or not
$int = 20;
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "The <b>$int</b> is a valid integer.<br>";
    if ($int >= 0 && $int <= 100) {
        echo "The <b>$int</b> is within the range of 0 to 100.";
    } else {
        echo "The <b>$int</b> is not within the range of 0 to 100.";
    }
} else {
    echo "The <b>$int</b> is not a valid integer.";
}
echo"<br>";

// using a regular expression for doing a case-insensitive search in the given string
$string = "Hello World";
$pattern = "/hello/i";

if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}
echo "<br>";    
      
// using PREG_OFFSET_CAPTURE to find the position of the string where the match was found
$string = "Hello World";
$pattern = "/world/i";

if (preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Match found at position " . $matches[0][1];
} else {
    echo "No match found.";
}
// tere kandhe pr yu sar rkhna, aur hath thamkr yu chal dene
// laage ye sara jamana bharam, bs tu hu mera
// tere kandhe pr sar rakhkr, khubsurat ye duniya bn jati hai
// hatho me hath bs chalde tu mere sath
// tere kandhe pr sar rakhkr, khubsurat ye duniya bn jati hai
// hatho me tera hath , ek nayi raah mil jati hai
// kali shahi se bhi rang nikal aate hai
?>
</body>
</html>