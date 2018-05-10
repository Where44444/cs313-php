<?php
// Start the session
session_start();
// Set session variables

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
   <body>

<?php
$_SESSION['small'] = '0';
$_SESSION['medium'] = '0';
$_SESSION['large'] = '0';
$_SESSION['giant'] = '0';
?>
      <h1 class=Title2>PURCHASE</h1>
      <a class=Link href="index.html">Home</a>
      <a class=Link href="cart.html">Cart</a>
      <a class=Link href="contact.html">Contact</a>
      <p class=Info2>Purchase RC Brackets Here! Click to add 1 to cart!<br>
      We may even send you some!</p>
      <p id="Load1" style="color:blue"></p>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <a href=# onclick="addToCart('small')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="170" width="256">
      </a>
      <span id="qtySmall">0</span></p>

      <a href=# onclick="displayVar('small')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="170" width="256">
      </a>

      <p class=BottomBar2 style="position: absolute; top: 1410px; left: 50px">
      Where44444 Copyright 2017 Alrights Reserved =D <br>
      We are not responsible for any mysterious disappearances of money <br>
      from your account.</p>
   </body>
</html>
