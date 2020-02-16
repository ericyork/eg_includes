<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Intro | <?php echo isset($pslug) ? strip_tags($pslug) : "Page not found" ?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include "config/connect.php" ?>
  <?php include "inc/nav.php" ?>
