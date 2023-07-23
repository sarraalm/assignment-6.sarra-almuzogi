<?php 
    $hn = 'localhost';
    $db = 'expense_tracker';
    $un = 'root';
    $pw = '';
    
    $con =  mysqli_connect($hn, $un, $pw, $db);

    if($con)
    {
      //echo"database is connect";
    }     
    else{

      echo"database is not connect";
    }
?>