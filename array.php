<?php
$title = "Array and Printouts";
include 'include/header.php'
?>

<h1><?php echo $title?></h1>
    <?php
    $num = 3;
 
     $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,18,19,20,21);
     
     echo $numbers[6];

     echo "<p>$numbers[10]</p>";
      
     $size = count($numbers);
     echo "<p>Array Numbers is size: $size</p>";

     for($count = 0; $count < $size; $count++){
         echo "<p>$numbers[$count]</p>";
    }
    ?>

<?php require 'include/footer.php' ?>