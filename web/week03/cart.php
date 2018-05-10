<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
   <script type="text/javascript" src="MyJavaScript.js"></script>
       <title>Business Page</title>
       <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 125%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:nth-child(odd) {
    background-color: white;
}
</style>
   </head>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <body onload="functionLoad()">
      <h1 class=Title2>CART</h1>
      <a class=Link href="index.php">Home</a>
      <a class=Link href="purchase.php">Browse</a>
      <a class=Link href="contact.html">Contact</a>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
      if ($_SESSION['small'] > 0)
      echo "<pre>Small Bracket -  Quantity: <span id='small'>" . $_SESSION['small'] . "</span></pre><br>";
      if ($_SESSION['medium'] > 0)
      echo "<pre>Medium Bracket - Quantity: <span id='medium'>" . $_SESSION['medium'] . "</span></pre><br>";
      if ($_SESSION['large'] > 0)
      echo "<pre>Large Bracket -  Quantity: <span id='large'>" . $_SESSION['large'] . "</span></pre><br>";
      if ($_SESSION['giant'] > 0)
      echo "<pre>THAT Bracket -   Quantity: <span id='giant'>" . $_SESSION['giant'] . "</span></pre><br>";
      ?>


      <p class=BottomBar2 style="position: absolute; top: 800px; left: 50px">
      Where44444 Copyright 2017 Alrights Reserved =D <br>
      We are not responsible for any mysterious disappearances of money <br>
      from your account.</p>
   </body>
</html>
