B1
 <br>;
<?php
for($i = 0; $i < 20; $i ++) {
    for($j = (20 - $i); $j < 20; $j ++) {
        echo "*";
    }
    echo "<br>";
}
?>
 <br>;
B2
<br>;<table border="3px">
<tr>
<?php
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
<br>;
B3
<br>;
<?php
$a = 5;
$b = 0;
$c = 10;
 
 
function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
  
 
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
?>
 
  
 <br>;B4 
<?php
 
function isPrimeNumber($n) {
     
    if ($n < 2) {
        return false;
    }
     
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 100;
echo ("Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
if ($n >= 2) {
    echo "2";
}
for ($i = 3; $i < $n; $i+=2) {
    if (isPrimeNumber($i)) {
        echo (" " . $i);
    }
}
?>

<br>;


<br>; B5
<?php
  
        $sum = 0 ;  
		for($x=1; $x <= 30; $x++)  
		{  
		  $sum +=$x;  
		}  
		echo "Tổng dãy số từ 1 đến 30 là:  $sum"."<br>"; 
       ?>
  
        
 echo "<br>";