<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  

<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 
?>  

</body>
</html>
