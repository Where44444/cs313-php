<html>
   <head>
      <title>Purchase Confirmation</title>
   </head>
         <link rel="stylesheet" type="text/css" href="styles.css">
   <body>
      <h1 class=Title2>PURCHASE CONFIRMATION</h1>
      <a class=Link href="index.php">Home</a>
      <a class=Link href="purchase.php">Browse</a>
      <a class=Link href="cart.php">Cart</a>
      <a class=Link href="contact.html">Contact</a>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
if($_POST["submit"]) {
echo "<p id=Form3><b><i>The order has been submitted! <br> Thank you for you business!</i></b></p>";
}

if($_POST["cancel"]) {
echo "<p id=Form3><b><i>The purchase has been cancelled! <br> Just buy something!</i></b></p>";
}

?>
   </body>
</html>
