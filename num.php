<?php

    $dbhost = 'localhost:3306'; 
    $dbuser = 'root';
    $dbpasswd = 'hy815923';

    $con = mysqli_connect($dbhost, $dbuser, $dbpasswd);
    $sql = "select count(*) from ClickIP";
    mysqli_select_db($con, 'ehum_db');

    $retval = mysqli_query($con, $sql);
    if(!$retval){
        dir('无法查询数据库：'. mysqli_error($con));
    }
    echo '数据库插入成功！';
    echo $retval;
    mysqli_close($con);
?>
