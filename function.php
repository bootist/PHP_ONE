<?php 
$title = "Function";
include 'include/header.php'
?>
<h1>Function</h1>
    <?php
    function writeMessage()
    {
        echo "You are realy a nice person. Have a nice day!<br/> ";
    }
    writeMessage();

    echo "<hr/>";

    writeMessage();

    function addFunction($num1,$num2) 
    {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }    
    function changeNum(&$num)
    {
        $num = $num + 10;
        //$num+= 10;
    } 
    function returnProduct($num1, $num2)   
    {
        $prod = $num1 * $num2;
        return $prod;
    }
        $num = 100;
        addFunction(20,30);
        addFunction($num,30);
        addFunction('20','30');

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct (30, 40);
        echo $return_value . '<br/>';
    ?>

<?php require 'include/footer.php' ?>