

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
$_POST["inputAddress"], "<br>" ,
$_POST["inputCity"], ", " , $_POST["inputState"], "<br><br><b><i>Phone Number</i></b><br>",

$_POST["inputPhone"], "<br><br><b><i>Items</i></b><br>",
"2 Inch Bracket     x", $_POST["input2Inch"], "    =$",  $_POST["input2Inch"]*2458.99, "<br>",
"5 Inch Bracket     x", $_POST["input5Inch"], "    =$",  $_POST["input5Inch"]*10333.99, "<br>",
"10 523/1000 Inch Bracket     x", $_POST["input10Inch"], "    =$",
$_POST["input10Inch"]*100020628.99, "<br><br>",

"<b><i>Totals</i></b><br>",
"Shipping + Tax + Handling<br>$", floor(($_POST["input2Inch"]*2458.99+$_POST["input5Inch"]*10333.99+
$_POST["input10Inch"]*100020628.99)*.001)/100, "<br>",
"Grand Total<br>$",
floor(($_POST["input2Inch"]*2458.99+$_POST["input5Inch"]*10333.99+
$_POST["input10Inch"]*100020628.99)*.001)/100 + $_POST["input2Inch"]*2458.99 + $_POST["input5Inch"]*10333.99+
$_POST["input10Inch"]*100020628.99, "<br><br>",

"<b><i>Payment</i></b><br>",
$_POST["card"], "<br>",
"Expires ", $months[$_POST["inputMonth"]], " ", $_POST["inputYear"], "<br>",
'<input type="submit" name="submit" action="confirmation.php" \>
<input type="submit" name="cancel" value="Cancel" action="confirmation.php" \>',
//'<button name="cancel" onclick="http://localhost/~alexjc/week12/confirmation.php">Cancel</button>',
"</p></form>";
?>
   </body>
</html>
