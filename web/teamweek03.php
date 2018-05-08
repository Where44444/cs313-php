<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

//if(isset($_POST['submit'])){
  //if(isset($_POST['major'])){
    //echo $_POST['major'];
  //}
//}
echo $name . "<br>" $email . "<br>";
?>
