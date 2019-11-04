<?php 
 $title = "While - Do Wehile Loop";
include 'include/header.php'
?>

<h1>While Loop</h1>

    <?php
     $grade = 0;
      // while($grade < 10){
     //     echo '<p>I AM LESS THAN 10!</p>';
     // }
     
     while($grade < 10){
         echo '<p>I AM LESS THAN 10!</p>';
         $grade++;
     }

     echo 'EXIT LOOP!';

     ?>
<h1>Do While Loop</h1>
     <?php
     $grade = 0;
     do{
         echo '<p>I AM DO WHILE LOOP</p>';
         $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
         
     ?>

<?php require 'include/footer.php' ?>