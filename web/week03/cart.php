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
      <p class=Info2>Purchase RC Brackets Here! Enter your desired quantity!<br>
      We may even send you some!</p>
      <p id="Load1" style="color:blue"></p>
      <form id=Form1 style="position: absolute; top: 240px; left: 220px"
      action="http://localhost/~alexjc/week12/review.php"
      onreset="window.alert('Form was reset');"
      method="post"
      >

      Name (Optional):<br>
      <input onfocus = "functionFocus()" onkeyup="function2()" type="text" id="name" name="inputName" ><p id=nameInvalid style="color:red"></p>

      Address (Optional):<br>
      <input onkeyup="function7()" type="text" id="address" name="inputAddress" ><br><p id=addressInvalid style="color:red"></p>

      City (Optional):<br>
      <input onkeyup="function2()" type="text" id="city" name="inputCity"><p id=cityInvalid style="color:red"></p>

      State (Optional):<br>
      <input onkeyup="function5()" type="text" id="state" name="inputState" size = "2"><p id=stateInvalid style="color:red"></p>

      Phone Number (Optional) (xxx-xxx-xxxx)<br>
      <input onkeyup="function8()" type="text" id="phone" name="inputPhone"><p id=phoneInvalid style="color:red"></p><br>

      <table>
  <tr>
    <th>Size</th>
    <th>Amount</th>
    <th>Cost</th>
    <th>Total Cost</th>
  </tr>
  <tr>
    <td>2"</td>
    <td><input onblur="function1()" type="text" id="2Inch" name="input2Inch" size="3" value = "0"></td>
    <td>$2,458.99 Each</td>
    <td id="Cost1">$0.00</td>
  </tr>
  <tr>
    <td>5"</td>
    <td><input onblur="function1()" type="text" id="5Inch" name="input5Inch" size="3" value = "0"></td>
    <td>$10,333.99 Each</td>
    <td id="Cost2">$0.00</td>
  </tr>
  <tr>
    <td>10 523/1000"</td>
    <td><input onblur="function1()" type="text" id ="10Inch" name="input10Inch" size="3" value = "0"></td>
    <td>$100,020,628.99 Each</td>
    <td id="Cost3">$0.00</td>
      </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Shipping + Tax + Handling:</td>
    <td id="Cost5">$0.00</td>
  </tr>
  </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Grand Total:</td>
    <td id="Cost4">$0.00</td>
  </tr>


</table>

      Credit Card Carrier:<br>
        <select name="card">
    <option value="Visa">Visa</option>
    <option value="MasterCard">MasterCard</option>
    <option value="American Express">American Express</option>
    <option value="Other">Other</option>
        </select><br>

      Credit Card Number:<br>
      <input onkeyup="function3()" type="text" id="card1"><p id=card1Invalid style="color:red"></p>

      Expiration Date:<br>
      <input onkeyup="function9()" type="text" id="month" name="inputMonth" value="Month"size="2"><p id=monthInvalid style="color:red">Invalid</p>
      <input onkeyup="function10()" type="text" id="year" name="inputYear" value="Year"size="4"><p id=yearInvalid style="color:red">Invalid</p>

      Security Code:<br>
      <input onkeyup="function11()" type="text" id="sc" size="3"><p id=scInvalid style="color:red"></p>
        <input type="submit" value="Submit"
        method="post">
        <!--onclick="window.alert('Thank you for your purchase!');"!-->
      <!--action="http://localhost/~alexjc/week12/confirmation.php"!-->
      <input type="reset">
      </form>
      <p class=BottomBar2 style="position: absolute; top: 1410px; left: 50px">
      Where44444 Copyright 2017 Alrights Reserved =D <br>
      We are not responsible for any mysterious disappearances of money <br>
      from your account.</p>
   </body>
</html>
