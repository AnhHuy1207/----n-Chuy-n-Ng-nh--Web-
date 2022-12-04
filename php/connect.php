<?php
    $conn=mysqli_connect("localhost","root","","dbfigure");
    if($conn->connect_error){
        die("Kết nối không thành công: ".$conn->connect_error);
    }
    echo "Kết nối thành công";
?>