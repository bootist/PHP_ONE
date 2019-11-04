<?php 
 $title = "IF-Else Statement";
include 'include/header.php'
?>
    <h1>IF-Else Statement</h1>
    <?php
    echo '<h2>If Statement</h2>';

    $Grade = 35;

    if($Grade >= 50)
    {
        echo '<h3 style= "color: green"> YOU HAVE PASSED </h3>';

    }
    else{

        echo '<h3 style= "color: red"> YOU HAVE failed </h3>';

    }

    $Grade = 'C';
    if($Grade == 'A')
    {
        echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
    }
    elseif ($Grade == 'B')
    {
        echo '<h2 style="color: blue">YOU DID WELL!</h2>';
    }
    else
    {
        echo '<h2 style="color: red">YOU HAVE failed</h2>';
    }


    ?>
<?php require 'include/footer.php' ?>