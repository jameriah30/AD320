<?php
/**
 * Created by PhpStorm.
 * User: jeremiah
 * Date: 3/10/2018
 * Time: 12:18 PM
 */

require ("configuration.php");
//class Db
//{
//    private static $instance = NULL;
//
//    private function __construct()
//    {
//    }
//
//    public static function getInstance()
//    {
//        if (!isset(self::$instance)) {
//            self::$instance = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
//        }
//        return self::$instance;
//    }
//}

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

