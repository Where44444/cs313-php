<!DOCTYPE html>
<html>
   <head>
       <title>Free Post</title>
   </head>
   <body>
   <h1 style="font-family:calibri;">Post anything you want! As long as it's cringe-free!</h1>

<?php
// Connect to the database
require("dbConnect.php");
$db = get_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['user'];
  $password = $_POST['password'];

  $userid = $_POST['userid'];
  $postp = $_POST['postp'];
  $cringycount = $_POST['cringycount'];

  $postid = $_POST['postid'];
  $word = $_POST['word'];

  $del = $_POST['del'];

 $sql1 =  'INSERT INTO userp (username,password) VALUES (:username, :password)';
 $sql2 =  'INSERT INTO post (user_id,post_text,cringy_count) VALUES (:userid, :postp, :cringycount)';
 $sql3 =  'INSERT INTO word (post_id,word) VALUES (:postid, :word)';
 $sql4 =  'DELETE FROM userp WHERE username = :del';
 $sql5 =  'DELETE FROM post WHERE post_text = :del';
 $sql6 =  'DELETE FROM word WHERE word = :del';

   if ($username)
   {
     $stmt = $db->prepare($sql1);
     $stmt->bindValue(':username', $username, PDO::PARAM_STR);
     $stmt->bindValue(':password', $password, PDO::PARAM_STR);
     $stmt->execute();
   }
   if ($userid)
   {
     $stmt = $db->prepare($sql2);
     $stmt->bindValue(':userid', $userid, PDO::PARAM_INT);
     $stmt->bindValue(':postp', $postp, PDO::PARAM_STR);
     $stmt->bindValue(':cringycount', 0, PDO::PARAM_INT);
     $stmt->execute();
     $pieces = explode(" ", $postp);
     echo $pieces[0] . "<br>"; // piece1
     echo $pieces[1] . "<br>"; // piece2
   }
   if ($postid)
   {
     $stmt = $db->prepare($sql3);
     $stmt->bindValue(':postid', $postid, PDO::PARAM_INT);
     $stmt->bindValue(':word', $word, PDO::PARAM_STR);
     $stmt->execute();
   }
   if ($del)
   {
     $stmt = $db->prepare($sql6);
     $stmt->bindValue(':del', $del, PDO::PARAM_STR);
     $stmt->execute();
     $stmt = $db->prepare($sql5);
     $stmt->bindValue(':del', $del, PDO::PARAM_STR);
     $stmt->execute();
     $stmt = $db->prepare($sql4);
     $stmt->bindValue(':del', $del, PDO::PARAM_STR);
     $stmt->execute();
   }
}

$stmt = $db->prepare('SELECT username, post_text, timestamp FROM post INNER JOIN userp ON post.user_id = userp.id ORDER BY timestamp DESC');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row)
{
  echo "<b>".$row['username']."</b><br>";
  echo "---------------------------------------------------------------------------";
  echo "<br>".$row['post_text'] ."<br>".$row['timestamp']."<br>";
  echo "---------------------------------------------------------------------------";
  echo "<br><br>";
}
echo "<br>";

 ?>

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
   // Connect to the database
   //require("dbConnect.php");
   //$db = get_db();

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
    <br><br>
    <form action="index.php" method="post">
    Insert User Password:<br>
    <input type="text" name="user" placeholder="Definitely not a user"><input type="text" name="password" placeholder="Preferably 1234"><br>
    Insert UserID Post CringyCount:<br>
    <input type="text" name="userid" placeholder="Pick a random user id, 100% safe"><input type="text" name="postp" placeholder="Cringy or Dank Posts"><input type="text" name="cringycount" placeholder="Cringe a day"><br>
    Insert PostID Word:<br>
    <input type="text" name="postid" placeholder="Random post id makes for easy bugs"><input type="text" name="word" placeholder="Pen is mightier than the sword, but not A-10 Gunship Miniguns"><br>
    <input type="submit" name="WOAH2"><br>
    </form>
    <br>
    <p>Object may not be deleted if it's being used by another table</p><br>

    <form action="index.php" method="post">
    Delete from Usernames, Post Text, and Words:<br>
    <input type="text" name="del" placeholder="Delete useful things here"><br>
    <input type="submit" name="WOAH3"><br>
    </form>

   </body>
</html>
