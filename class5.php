<html>
<head>
</head>

<body>

<?php  

$asValue=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($asValue);  
foreach($asValue as $y=>$y_value)  
{  
	echo "Age of $y is : $y_value <br>";  
}  
echo"<br>";
 
 
$asKey=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($asKey);  
foreach($asKey as $y=>$y_value)  
{  
	echo "Age of $y is : $y_value <br>";  
}  
echo"<br>";

$desValue=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");  
arsort($desValue);  
foreach($desValue as $y=>$y_value)  
{  
	echo "Age of $y is : $y_value<br>";  
}  
echo"<br>";

$desKey=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($desKey);  
foreach($desKey as $y=>$y_value)  
{  
	echo "Age of $y is : $y_value <br>";  
}  


?> 



</body>
</html>