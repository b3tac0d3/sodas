<?php

namespace sodas;
use PDO;
use PDOException;

if(!defined("sodas_config")) require_once($_SERVER['DOCUMENT_ROOT'] . "/src/app/plugins/sodas/config.php");

class db{
    private $log;

    function connect($db_name = null){
        $this -> log = new log();
        if(empty($_SESSION)) session_start();
        $user = sodas_db_user;
        $pass = sodas_db_pass;
        $host = sodas_db_host;
        if(empty($db_name)) $db_name = sodas_db_name;

        try{
            $this -> db = new PDO("mysql:$host=localhost;dbname=$db_name", $user, $pass);
        }catch(PDOException $e){
            $this -> log -> set_record("connection_error", ["error" => trim($e -> getMessage())]);
            return;
        } // try

        // If we've made it this far, log the good connection
        $this -> log -> set_record("connection", ["database" => $db_name]);
        return $this -> db;
    } // connect()
} // class db

?>