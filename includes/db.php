<?php
    //initiate
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_password'] = "";
    $db['db_name'] = "massexport_db";
    
    foreach($db as $key => $value){
        define(strtoupper($key),$value,false);
    }
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //check for db connection error
    if(!$connection){
        die("Error Establishing Database! ".mysqli_error($connection));
    }
    
?>