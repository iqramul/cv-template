<html>
<head>
</head>

<body>

<?php  

$nums=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$z=count($nums);
$count = 0;
for ($x = 0; $x <= $z-1 ; $x++) {
	
 $count = $count+$nums[$x];	
}
$zz=$count/$z;
echo "$zz <br>";

sort($nums);
echo "List of seven lowest temperatures : ";
for($x = 0; $x < 8; $x++) {
    echo "$nums[$x] ";
    ;
}
echo "<br>";

rsort($nums);
echo "List of seven Highest temperatures : ";
for($x = 0; $x < 8; $x++) {
    echo "$nums[$x] ";
    ;
}




?> 



</body>
</html>