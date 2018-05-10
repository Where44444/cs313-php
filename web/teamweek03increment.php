<?php
// Start the session
session_start();
$_SESSION['times'] += 1;
?>
<!DOCTYPE html>
<html>
   <head>
       <title>Business Page</title>
   </head>
   <body>
<p>You have visited this page <?php echo $SESSION['times']; ?></p>
   </body>
</html>
