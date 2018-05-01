<?php
for ($x = 1; $x < 11; $x++){
  if ($x % 2 == 1){
    echo "<div id = div$x>Text</div>";
  }
  else {
    echo "<font color = red><div id = div$x>Text</div></font>";
  }
}
?>
