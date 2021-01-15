<?php

//Used to connect to the database
function DatabaseConnection()
{
    $dbHost = 'localhost';
    $dbUserName = 'root';
    $dbPasword = '';
    $dbName = 'student';

    $con = mysqli_connect($dbHost, $dbUserName, $dbPasword, $dbName);

    if (!mysqli_errno($con)) {
        return $con;
    } else {
        return mysqli_error($con);
    }
}
