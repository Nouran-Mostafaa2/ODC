<?php

include "db.php";
$db = new db;
echo "<pre>";
$user = [
    "name" => " mohaned ",
    "email" => " mohamed ",
    "password" => " 123 "
];
echo $db-> insert ( "user" ,$user )->excu( );
