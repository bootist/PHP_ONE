    <?php 
    $title = "Index";
    include 'include/header.php'
    
    ?>
   <h1> hello word - PHP ONE </h1>
   <br/>
   <?php 
    echo 'helo php';
    echo '<br/>';
    echo 'second line';
      
    $name = 'Glenrick Dennis';
    echo '<br/>';
    echo $name;
    echo $age = 21;
    echo '<h1> my name is: '.$name.' </h1>';
    echo '<h1> my age is: '.$age.' </h1>';

    echo "<h1> my name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME</button>
    <button type="button" class="btn btn-primary">CLICK ME</button>
    <button type="button" class="btn btn-success">CLICK ME</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger"> heroku.com</a>
    <?php
    require 'include/footer.php'
    ?>
 