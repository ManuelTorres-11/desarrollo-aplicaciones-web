<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  

<?php  
$x = 75;
  
function myfunction() {
  global $x;
  echo $x;
}

myfunction()
?>  

<?php  
function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;?>  

</body>
</html>
