function addToCart(str)
{
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("qtySmall").innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "addToCart.php?q=" + str, true);
      xmlhttp.send();
  }

  function displayVar(str)
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("qtySmall").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "test.php?q=" + str, true);
    xmlhttp.send();
  }

function function1()
{
    var grandTotal = 0;
  for (j = 0; j < 3; j++)
  {
    var formNumber;
    var invalidNumber;
    var cost;
    if (!j)
    {
    formNumber = "2Inch";
    invalidNumber = "Cost1";
    cost = 2458.99;
    }
    else if (j==1)
    {
    formNumber = "5Inch";
    invalidNumber = "Cost2";
    cost = 10333.99;
    }
    else if (j==2)
    {
    formNumber = "10Inch";
    invalidNumber = "Cost3";
    cost = 100020628.99;
    }
    var str = document.getElementById(formNumber).value;
    var hasDecimal = str.match(/\./);
    if (document.getElementById(formNumber).value >= 0 && document.
    getElementById(formNumber).value <= 10000 && !hasDecimal)
    {
    var mAmount = cost * document.getElementById(formNumber).value;
    var num = mAmount.toFixed(2);
    document.getElementById(invalidNumber).innerHTML = "$" + num;
    var num2 = Number(num);
    grandTotal = grandTotal + num2;
    var grandTotal2 = grandTotal.toFixed(2);
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
    if (document.getElementById(formNumber).value == "")
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
    var shipping = grandTotal2 * .00001;
    var shipping2 = shipping.toFixed(2);
    document.getElementById("Cost5").innerHTML = "$" + shipping2;
    var shipping3 = Number(shipping2);
    var grandTotal3 = Number(grandTotal2);
    var grandTotal4 = grandTotal3 + shipping3;
    document.getElementById("Cost4").innerHTML = "$" + grandTotal4.toFixed(2);;

  }
}

function function2()
{
  for (j = 0; j < 2; j++)
  {
    var formNumber;
    var invalidNumber;
    if (!j)
    {
    formNumber = "name";
    invalidNumber = "nameInvalid";
    }
    else if (j==1)
    {
    formNumber = "city";
    invalidNumber = "cityInvalid";
    }

    var str = document.getElementById(formNumber).value;
    var res = str.match(/[^a-zA-Z\s]/);
    if (!res)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
	}
}

function function3()
{
    var formNumber;
    var invalidNumber;
    formNumber = "card1";
    invalidNumber = "card1Invalid";
    var str = document.getElementById(formNumber).value;
    var res = str.match(/\s*\d{16}/);
    var res2 = str.match(/\s*\d{16}[\s]*[\S]+/);
    var res3 = str.match(/\s*\d{4}\s\d{4}\s\d{4}\s\d{4}/);
    var res4 = str.match(/\s*\d{4}\s\d{4}\s\d{4}\s\d{4}[\s]*[\S]+/);
    var res5 = str.match(/\s*\d{5}\s\d{4}\s\d{4}\s\d{4}[\s]*/);

    if ((res && !res2) || (res3 && !res4 && !res5))
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }

}

function function4()
{
  for (j = 0; j < 2; j++)
  {
    var validDate = 1;
    var formNumber;
    var invalidNumber;
    if (!j)
    {
    formNumber = 0;
    invalidNumber = "InvalidDate1";
    }
    else
    {
    formNumber = 1;
    invalidNumber = "InvalidDate2";
    }
    var str = document.getElementById('form4').elements[formNumber].value;
    if (str.length < 8)
    {
    validDate = 0;
    }
    if (!validDate)
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid date";
    }
    //Month
    var res = str.match(/\d+/);
    //Day
    var res2 = str.match(/[\/]\d+[\/]/);
    var res2String = res2.toString();
    var res3 = res2String.match(/\d+/);
    //Year
    var res4 = str.match(/[\/][\S]+/);
    var res4String = res4.toString();
    var res5 = res4String.match(/\d+[\/][\S]+/);
    var res5String = res5.toString();
    var res6 = res5String.match(/[\/][\S]+/);
    var res6String = res6.toString();
    var res7 = res6String.match(/\d+/);

    var resMonth = Number(res);
    var resDay = Number(res3);
    var resYear = Number(res7);
    //window.alert(resDay);

    if (resMonth < 1 || resMonth > 12)
    {
    validDate = 0;
    }
    if (resDay < 1 || resDay > 31)
    {
    validDate = 0;
    }
    if (resYear < 1753 || resYear > 2100)
    {
    validDate = 0;
    }
    if (validDate)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid date";
    }

  }

}

function function5()
{

    var res1 = "";
    var validState = 1;
    var formNumber;
    var invalidNumber;
    var whiteSpace = 1;
    formNumber = "state";
    invalidNumber = "stateInvalid";

    var str = document.getElementById(formNumber).value;
    var res = str.match(/\s*\w{2}/);
    var res2 = str.match(/\s*\w{2}[\s]*[\S]+/);
    var res3 = str.match(/\s*\w{2}[\S]+/);
    if (!res || res2 || res3)
    {
      validState = 0;
    }
    if (validState)
    {
      resString = res.toString();
      res4 = resString.match(/\w{2}/);
      res4String = res4.toString();

      if (res4String != "AL" && res4String != "AK" && res4String != "AZ" && res4String != "AR" && res4String != "CA" && res4String != "CO" && res4String != "CT" && res4String != "DE" && res4String != "FL" && res4String != "GA" && res4String != "HI" && res4String != "ID" && res4String != "IL" && res4String != "IN" && res4String != "IA" && res4String != "KS" && res4String != "KY" && res4String != "LA" && res4String != "ME" && res4String != "MD" && res4String != "MA" && res4String != "MI" && res4String != "MN" && res4String != "MS" && res4String != "MO" && res4String != "MT" && res4String != "NE" && res4String != "NV" && res4String != "NH" && res4String != "NJ" && res4String != "NM" && res4String != "NY" && res4String != "NC" && res4String != "ND" && res4String != "OH" && res4String != "OK" && res4String != "OR" && res4String != "PA" && res4String != "RI" && res4String != "SC" && res4String != "SD" && res4String != "TN" && res4String != "TX" && res4String != "UT" && res4String != "VT" && res4String != "VA" && res4String != "WA" && res4String != "WV" && res4String != "WI" && res4String != "WY")
      {
        validState = 0;
      }
    }
    if (validState)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function function6()
{
  for (j = 0; j < 2; j++)
  {
    var formNumber;
    var invalidNumber;
    var validMoney = 1;
    if (!j)
    {
    formNumber = 0;
    invalidNumber = "InvalidMoney1";
    }
    else
    {
    formNumber = 1;
    invalidNumber = "InvalidMoney2";
    }
    var str = document.getElementById('form6').elements[formNumber].value;
    //1000
    var res1 = str.match(/\s*\d+/);
    //$1000
    var res2 = str.match(/\s*\$\d+/);
    //NO ,0,
    var res1NO = str.match(/\s*\,\d\,/);
    //NO ,00,
    var res2NO = str.match(/\s*\,\d{2}\,/);
    //NO ,0000
    var res3NO = str.match(/\s*\,\d{4}/);
    //NO .00.
    var res4NO = str.match(/\.\S*\s*\./);
    //NO ,00 at end
    var res5NO = str.match(/\,\d{2}(?!\d)/);
    //NO ,0 at end
    var res6NO = str.match(/\,\d{1}(?!\d)/);
    //NO , at end
    var res7NO = str.match(/\,(?!\d)/);
    //NO 0000,
    var res8NO = str.match(/\s*\d{4}\,/);
  	 //NO 0000,
    var res9NO = str.match(/\s*\d{4}\,/);
    //NO .000
    var res10NO = str.match(/\.\s*\S*\d{3}/);
    //NO signs other than digits, $ . or ,
    var res11NO = str.match(/[^,$.\d\s]/);
    //NO space ,
    var res12NO = str.match(/\s\,/);
    //NO  , space
    var res13NO = str.match(/\,\s/);
    //NO  space .
    var res13NO = str.match(/\s\./);
    //Has a decimal .
    var hasDecimal = str.match(/\./);
    //Has a decimal + two places .00
    var hasTwoPlaces = str.match(/\.\d{2}/);
    if(res1NO || res2NO || res3NO || res4NO || res5NO || res6NO || res7NO || res8NO || res9NO || res10NO
    || res11NO || res12NO || res13NO)
    {
      validMoney = 0;
    }

    if(hasDecimal && !hasTwoPlaces)
    {
      validMoney = 0;
    }
    if(!res1 && !res2)
    {
    validMoney = 0;
    }

    if (validMoney)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid money amount";
    }
  }

}

function function7()
{

    var formNumber;
    var invalidNumber;
    formNumber = "address";
    invalidNumber = "addressInvalid";


    var str = document.getElementById(formNumber).value;
    var res = str.match(/\d/);
 	 var res2 = str.match(/[a-zA-z]/);
    if (res && res2)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function function8()
{

    var formNumber;
    var invalidNumber;
    formNumber = "phone";
    invalidNumber = "phoneInvalid";


    var str = document.getElementById(formNumber).value;
    var res = str.match(/\d{3}\-\d{3}\-\d{4}/);
 	 var res2 = str.match(/\d{3}\d{3}\d{4}/);
    if (res || res2)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function function9()
{

    var formNumber;
    var invalidNumber;
    formNumber = "month";
    invalidNumber = "monthInvalid";


    var str = document.getElementById(formNumber).value;
    var res2 = str.match(/\./);
    if (str > 0 && str < 13 && !res2)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function function10()
{

    var formNumber;
    var invalidNumber;
    formNumber = "year";
    invalidNumber = "yearInvalid";


    var str = document.getElementById(formNumber).value;
    var res2 = str.match(/\./);
    if (document.getElementById("month").value < 3 && str == 2017)
    {
	 document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
    else if (str > 2016 && str < 2101 && !res2)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function function11()
{

    var formNumber;
    var invalidNumber;
    formNumber = "sc";
    invalidNumber = "scInvalid";


    var str = document.getElementById(formNumber).value;
    var res2 = str.match(/\d{3}/);
    var res3 = str.match(/[^\d\s]/);
    var res4 = str.match(/\S\s*\d{3}/);
    var res5 = str.match(/\d{3}\s*\S/);
    if (res2 && !res3 && !res4 && !res5)
    {
    document.getElementById(invalidNumber).innerHTML = "";
    }
    else
    {
    document.getElementById(invalidNumber).innerHTML = "Invalid";
    }
}

function functionLoad()
{
    document.getElementById("Load1").innerHTML = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>PURCHASE HERE";
}
function functionFocus()
{
    document.getElementById("Load1").innerHTML = "";
}
