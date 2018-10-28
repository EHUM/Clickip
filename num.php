<?php
    // header("content-type:application/json");  
    $dbhost = 'localhost:3306'; 
    $dbuser = 'root';
    $dbpasswd = 'hy815923';

    $connect = mysqli_connect($dbhost, $dbuser, $dbpasswd);
    $sql = "select count(*) from ClickIP";
    mysqli_select_db($connect, 'ehum_db');

    $result = mysqli_query($connect, $sql);
    // $row = mysql_num_rows($result);
    // while($row = mysql_fetch_array($result)){
    //     echo $row['id']. " " .$row['ip'];
    //     echo "<br />";
    // }
    list($row_num) = $result->fetch_row();
    // $arr = array('id' => 1, 'ipcount' => $result);
    echo json_encode($row_num);
    mysqli_close($connect);
?>
