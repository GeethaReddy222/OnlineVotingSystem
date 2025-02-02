<?php
    $con=mysqli_connect("localhost","root","","votingsystem");
    if($con)
    {
        echo "connection successfull";
    }
    else{
        die(mysqli_error($con));
    }
?>
