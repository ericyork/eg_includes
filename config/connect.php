<?php
  //creates the variables
  $servername = "localhost";
  $dbname = "myblog"; // db is named "myblog"
  $username = "blog-admin"; // username is "blog-admin"
  $password = "pBCwNIIoP85qhMyC"; // password is "pBCwNIIoP85qhMyC"

  // Opens a connection
  try {
      $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
  }

  // Checks connection and throws error if failed
  catch(PDOException $exception){
      echo "<p class=\"logged-fail\">Connection error: " . $exception->getMessage() . ". ";
  }

  if (isset($exception)) {
    echo "You're not currently connected to a database.</p>";
  }

  else {
    echo "<p class=\"logged\">[You're currently connected to db $dbname.] <a href=\"create.php\">New Post</a></p>";
  }
?>
