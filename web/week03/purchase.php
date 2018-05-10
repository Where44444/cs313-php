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
   <body>
      <h1 class=Title2>BROWSE</h1>
      <a class=Link href="index.php">Home</a>
      <a class=Link href="cart.php">Cart</a>
      <a class=Link href="contact.html">Contact</a>
      <p class=Info2>Purchase RC Brackets Here! Click to add 1 to cart!<br>
      We may even send you some!</p>
      <p id="Load1" style="color:blue"></p>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <a href=# onclick="addToCart('small')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="85" width="128">
      </a>
      <p>Small <span id="small"><?php echo $_SESSION['small']; ?></span></p><br>
      <a href=# onclick="addToCart('medium')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="170" width="256">
      </a>
      <p>Medium <span id="medium"><?php echo $_SESSION['medium']; ?></span></p><br>
      <a href=# onclick="addToCart('large')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="340" width="512">
      </a>
      <p>Large <span id="large"><?php echo $_SESSION['large']; ?></span></p><br>
      <a href=# onclick="addToCart('giant')">
      <img class=img src="RCBracket.png" alt="RC Phone Bracket" height="850" width="1280">
      </a>
      <p>... <span id="giant"><?php echo $_SESSION['giant']; ?></span></p><br>

      <p class=BottomBar2 style="position: absolute; left: 50px">
      Where44444 Copyright 2017 Alrights Reserved =D <br>
      We are not responsible for any mysterious disappearances of money <br>
      from your account.</p>
   </body>
</html>
