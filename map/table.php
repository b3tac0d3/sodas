<?php

namespace sodas;
use PDO;

class table extends db{
    
    private $db;
    private $table;
    private $query;
    private $query_string;

    function __construct(){
        $this -> db = new db();
    }

    function create($name, $columns = array()){
        // $columns = array("id int not null primary key auto_increment","name varchar(255)")
        // CREATE TABLE table_name id int not null primary key auto_increment, username varchar(255), password varchar(255) active boolean
        if(empty($this -> table = $name)) return;
        $this -> query_string = "create table {$this -> table}";
    }

    function add_col(){}

    function delete_col(){}

    function update_col(){}

    function update(){}

    function truncate(){}

    private function sample_array(){
        // Just a sample array for reference
        $log_entry = array(
            "type" => "create",
            "date" => strtotime(time()),
            "command_count" => 4,
            "commands" => array(
                1 => array(
                    "short" => "create table users",
                    "full" => "create table users(id int not null primary key auto_increment, username varchar(255), active boolean)",
                ),
                2 => array(
                    "short" => "create table contacts",
                    "full" => "create table contacts(id int not null primary key auto_increment, username varchar(255), active boolean)",
                ),
                3 => array(
                    "short" => "create table emails",
                    "full" => "create table emails(id int not null primary key auto_increment, username varchar(255), active boolean)",
                )
            )
        );
    }

} // class table
?>