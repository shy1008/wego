<?php
    include './dbconnection.php';
    $connect=dbconn();

    $userid=$_POST['custom_id'];
    $username=$_POST['custom_name'];
    $userage=$_POST['custom_age'];

    $query="INSERT into test_info(custom_id, custom_name, custom_age) values('$userid','$username','$userage')";
    // mysqli_select_db($connect, $db_name);
    // mysqli_set_charset ( $connect, "set names utf8");
    mysqli_query($connect, $query);
    mysqli_query($connect, "set names utf8");
 ?>

 <script>
 location.href='./test_info.php'
 </script>