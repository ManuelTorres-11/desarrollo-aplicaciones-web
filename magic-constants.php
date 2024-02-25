<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
 
 <?php
function myValue(){
  return __FUNCTION__;
}
echo myValue();
?>

<?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>
