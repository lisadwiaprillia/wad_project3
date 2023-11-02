<?php 
    $conn = mysqli_connect("localhost","root","","wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM student WHERE ID_Student = 0");
    var_dump($result);
    var_dump(mysqli_fetch_row($result));
    var_dump(mysqli_fetch_assoc($result));
    var_dump(mysqli_fetch_array($result));
    var_dump(mysqli_fetch_object($result));
?>