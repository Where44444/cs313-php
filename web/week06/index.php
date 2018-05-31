<!DOCTYPE html>
<html>
   <head>
       <title>Search Page</title>
   </head>
   <body>
   <h1>Search for Database Entries Boi!</h1>
   <form action="result.php" method="post">
   Search Users:<br>
   <input type="text" name="user" placeholder="Definitely not a user"><br>
   Search Posts:<br>
   <input type="text" name="post" placeholder="Cringy or Dank Posts"><br>
   Search Words:<br>
   <input type="text" name="word" placeholder="Pen is mightier than the sword, but not A-10 Gunship Miniguns"><br>
   Search My Wallet:<br>
   <input type="text" name="wallet" placeholder="No Money Here"><br>
   <input type="submit" name="WOAH"><br>
   </form>
   <?php
   $dbUrl = getenv('DATABASE_URL');

   $dbopts = parse_url($dbUrl);

   $dbHost = $dbopts["host"];
   $dbPort = $dbopts["port"];
   $dbUser = $dbopts["user"];
   $dbPassword = $dbopts["pass"];
   $dbName = ltrim($dbopts["path"],'/');

   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $stmt = $db->prepare('SELECT * FROM userp');
   $stmt2 = $db->prepare('SELECT * FROM post');
   $stmt3 = $db->prepare('SELECT * FROM word');
   $stmt->execute();
   $stmt2->execute();
   $stmt3->execute();
   $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
   $rows3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

   echo "Users and passwords in the database:<br>";
   foreach ($rows as $row)
   {
     echo "<b>".$row['username']." ".$row['password'] ."</b>";
     echo '<br/>';
   }
   echo "<br>";

   echo "Posts and cringyness counts in dem databases:<br>";
   foreach ($rows2 as $row)
   {
     echo "<b>".$row['post_text']." ".$row['cringy_count']."</b>";
     echo '<br/>';
   }
   echo "<br>";

   echo "Words in them database right there:<br>";
   foreach ($rows3 as $row)
   {
     echo "<b>".$row['word']."</b>";
     echo '<br/>';
   }
   echo "<br> No Wallet Database Needed";

    ?>

    <form action="" method="post">
    Insert Users and Passwords:<br>
    <input type="text" name="user" placeholder="Definitely not a user"><input type="text" name="password" placeholder="Preferably 1234"><br>
    Search Posts:<br>
    <input type="text" name="post" placeholder="Cringy or Dank Posts"><br>
    Search Words:<br>
    <input type="text" name="word" placeholder="Pen is mightier than the sword, but not A-10 Gunship Miniguns"><br>
    Search My Wallet:<br>
    <input type="text" name="wallet" placeholder="No Money Here"><br>
    <input type="submit" name="WOAH"><br>
    </form>
   </body>
</html>
