<html>
<head>
</head>

<body>

<?php  
 $x = array(1, 2, 3, 4, 5);  
 var_dump($x);  
 unset($x[1]);  
 $x = array_values($x);  
 echo '<br>';  
var_dump($x);
?> 


</body>
</html>