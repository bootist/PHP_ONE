<?php 
$title = "For Loop";
include 'include/header.php'
?>
   <h1>For Loop</h1>
   <?php
      for($count = 0; $count < 10; $count++)
        {
            echo '<p>helo world</p>';
        }
        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The Count is: $count</p>";
        }
   ?>
<?php require 'include/footer.php' ?>