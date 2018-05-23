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
      $post = $_POST["post"];
      $word = $_POST["word"];

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT * FROM userp where username = :userp';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':userp', $userp, PDO::PARAM_STR);

      $stmt->execute();
      $rowsChanged = $stmt->rowCount();
      $stmt->closeCursor();


      foreach ($rowsChanged as $row)
      {
        echo "<b>".$row['username']." ".$row['password'];
        echo '<br/>';
      }

       ?>
   </body>
</html>