<?php
    header('Content-type:text/json; charset=utf-8');
    $ip = $_POST['ip'];

    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpasswd = 'hy815923';

    $con = mysqli_connect($dbhost, $dbuser, $dbpasswd);
    // if(!$con) {
    //     dir('连接失败' . mysqli_error($con));
    // }
    // echo '连接成功<br >';
    
    $sql = "INSERT INTO ClickIP ".
           "(ip) ".
           "VALUES ".
           "('$ip')";

    mysqli_select_db($con, 'ehum_db');
    $retval = mysqli_query($con, $sql);
    // if(!$retval){
    //     dir('无法插入数据库：'. mysqli_error($con));
    // }
    // echo '数据库插入成功！';
    mysqli_close($con);


    if($ip == ''){
        $su = '';
    }else{
        $su = 'success';
    }

    $data = '{su: "'. $su .'"}';
    echo json_encode($data);
?>