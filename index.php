<?php $pslug = "Home" ?>
<?php include "inc/head.php" ?>
<main>
  <article>
    <?php
      $query = "SELECT author, title, content, created FROM posts";
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $post_array = $stmt->execute();
      while ($post_array = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($post_array);
      echo "<div class=\"post\">";
      echo "<div class=\"post-meta\">";
      echo "<h2>" . $title . "</h2>";
      echo "<p>Author: " . $author . "</p>";
      echo "<p>Date: " . $created . "</p>";
      echo "</div>";
      echo "<div class=\"post-content\">";
      echo $content;
      echo "</div></div>";
      }
    ?>
  </article>
  <aside>
    <?php include "inc/aside.php" ?>
  </aside>
</main>
<?php include "inc/footer.php" ?>
