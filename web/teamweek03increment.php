<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
   <head>
       <title>Business Page</title>
   </head>
   <body>
     <?php
$_SESSION['times'] += 1;
     ?>
<p>You have visited this page <?php echo $_SESSION['times']; ?></p>
   </body>
</html>
