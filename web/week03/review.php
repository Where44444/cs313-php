<?php
// Start the session
session_start();
?>
<html>
   <head>
      <title>Purchase Review</title>
   </head>
      <link rel="stylesheet" type="text/css" href="styles.css">
   <body>
   <script>
   function myScript()
   {
   "confirmation.php";
   }
   </script>
   <h1 class=Title2>PURCHASE REVIEW</h1>
   <a class=Link href="index.php">Home</a>
   <a class=Link href="purchase.php">Browse</a>
   <a class=Link href="cart.php">Cart</a>
   <a class=Link href="contact.html">Contact</a>
<?php
$months = array("NULL" ,"January", "February", "March", "April", "May", "June", "July",
"August", "September", "October", "November", "December");

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><form action=\"confirmation.php\" method=\"POST\" /><p id=Form3><b><i>Name</i></b><br>" ,
filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_STRING),

"<br><br><b><i>Address</i></b><br>",
filter_input(INPUT_POST, 'inputAddress', FILTER_SANITIZE_STRING), "<br>" ,
filter_input(INPUT_POST, 'inputCity', FILTER_SANITIZE_STRING), ", " , filter_input(INPUT_POST, 'inputState', FILTER_SANITIZE_STRING), "<br><br><b><i>Phone Number</i></b><br>",

filter_input(INPUT_POST, 'inputPhone', FILTER_SANITIZE_STRING), "<br><br><b><i>Items</i></b><br>",
"Small Bracket     x", $_SESSION["small"], "    =$",  $_SESSION["small"]*2458.99, "<br>",
"Medimum Bracket     x", $_SESSION["medium"], "    =$",  $_SESSION["medium"]*10333.99, "<br>",
"Large Bracket     x", $_SESSION["large"], "    =$", $_SESSION["large"]*100020628.99, "<br>",
"BIG FREAKIN Bracket     x", $_SESSION["giant"], "    =$", $_SESSION["giant"]*999999999.99, "<br><br>",

"<b><i>Totals</i></b><br>",
"Shipping + Tax + Handling<br>$", floor(($_SESSION["small"]*2458.99+$_SESSION["medium"]*10333.99+
$_SESSION["giant"]*100020628.99)*.001)/100, "<br>",
"Grand Total<br>$",
floor(($_SESSION["small"]*2458.99+$_SESSION["medium"]*10333.99+
$_SESSION["large"]*100020628.99)*.001)/100 + $_SESSION["small"]*2458.99 + $_SESSION["medium"]*10333.99+
$_SESSION["large"]*100020628.99+$_SESSION["giant"]*999999999.99, "<br><br>",

"<b><i>Payment</i></b><br>",
filter_input(INPUT_POST, 'card', FILTER_SANITIZE_STRING), "<br>",
"Expires ", $months[filter_input(INPUT_POST, 'inputMonth', FILTER_SANITIZE_STRING)], " ", filter_input(INPUT_POST, 'inputYear', FILTER_SANITIZE_STRING), "<br>",
'<input type="submit" name="submit" action="confirmation.php" \>
<input type="submit" name="cancel" value="Cancel" action="confirmation.php" \>',
//'<button name="cancel" onclick="http://localhost/~alexjc/week12/confirmation.php">Cancel</button>',
"</p></form>";
?>
   </body>
</html>
