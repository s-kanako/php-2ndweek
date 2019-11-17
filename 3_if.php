<?php

$a = "30";
$b = 30;

if($a === $b) {
    echo "Correct";
} else {
    echo "False";
}

echo"<br>";

$c = 5;
$d = 10;

if($c += $d <= 30) {
    echo "Good morining";
} else if($c == 5 ) {
    echo "Hello";
} else {
    echo "Good night";
}


echo"<br>";


$e = 10;
$f = 4;

if($e - $f < 4) {
    echo "Yeah!";
} elseif($e+$f != 14) {
    echo "Nice!";
} else {
    echo "Good!";
}


echo"<br>";

$g = "9";
$f = 2019;

if($g == $f) {
    echo 2020;
} elseif ($g !== $f) {
    echo 2021;
} else {
    echo 2022;
}

echo"<br>";

$h = 18;
$i = 25;

if($h += $i <= 40) {
    echo "Japan";
} elseif ($h !== $i) {
    echo "India";
} else {
    echo "Vietnam";
}


echo"<br>";

$o = 45;
$p = 60;

if ($p % $o < 5) {
    echo "Hello";
} elseif ($p / $o == 0) {
    echo "Hi";
} else {
    echo "Good Bye";
}
 
echo"<br>";


$q = 10;
$r = 6;

if($q * $r > 65) {
    echo "Kanako";
} elseif ($q !== $r) {
    echo "Sugita";
} else {
    echo "No";
}

echo"<br>";


$s = 10;
$t = 20;

if($s === $t) {
    echo "Kanako";
} elseif ($s += $y <= 70) {
    echo "Asako";
} else {
    echo "Noriko";
}

echo"<br>";


$x = 99 * 99;
$y = 77 * 77;
    
    if ($x > 9800) {
      echo '$x is greater than 9800';
    }
    
    if ($y > 6000) {
      echo '$y is greater than 6000';
        
    }
?>