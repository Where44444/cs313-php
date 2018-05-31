<!DOCTYPE html>
<html>
   <head>
       <title>Results</title>
   </head>
   <body>
   <h1>Database Results</h1>
      <?php
      $dbUrl = getenv('DATABASE_URL');

      $dbopts = parse_url($dbUrl);

      $dbHost = $dbopts["host"];
      $dbPort = $dbopts["port"];
      $dbUser = $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName = ltrim($dbopts["path"],'/');

      $userp = $_POST["user"];
      $postp = $_POST["post"];
      $wordp = $_POST["word"];

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $db->prepare('SELECT * FROM userp WHERE username=:userp');
      $stmt2 = $db->prepare('SELECT * FROM post WHERE post_text=:postp');
      $stmt3 = $db->prepare('SELECT * FROM word WHERE word=:wordp');
      $stmt->bindValue(':userp', $userp, PDO::PARAM_STR);
      $stmt2->bindValue(':postp', $postp, PDO::PARAM_STR);
      $stmt3->bindValue(':wordp', $wordp, PDO::PARAM_STR);
      $stmt->execute();
      $stmt2->execute();
      $stmt3->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      $rows3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

      echo "Users:<br>";
      foreach ($rows as $row)
      {
        echo "<b>".$row['username']." ".$row['password'] ."</b>";
        echo '<br/>';
      }
      echo "<br>";

      echo "Posts:<br>";
      foreach ($rows2 as $row)
      {
        echo "<b>".$row['post_text']." ".$row['cringy_count']."</b>";
        echo '<br/>';
      }
      echo "<br>";

      echo "Words:<br>";
      foreach ($rows3 as $row)
      {
        echo "<b>".$row['word']."</b>";
        echo '<br/>';
      }
      echo "<br>";

       ?>
   </body>
</html>
