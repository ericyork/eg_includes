<?php
  //creates the variables
  $servername = "localhost";
  $dbname = "myblog"; // db is named "myblog"
  $username = "blog-admin"; // username is "blog-admin"
  $password = "pBCwNIIoP85qhMyC"; // password is "pBCwNIIoP85qhMyC"

  // Opens a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Checks connection and throws error if failed
  if ($conn->connect_error) {
     exit("<p class=\"logged\">Connection failed: " . $conn->connect_error . "</p>");
  }

  if (isset($dbname)) {
    echo "<p class=\"logged\">[You're currently connected to $dbname.] <a href=\"create.php\">Create Post</a></p>";
  }

  else {
    echo "<p class=\"neutral\">You're not currently connected to a database.</p>";
  }
?>
