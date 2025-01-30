<?php

const DB_HOST = "MySQL-8.0(root)";
const DB_NAME = "php_db";
const DB_USER = "root";
const DB_PASS = "";

function getDB(){
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}