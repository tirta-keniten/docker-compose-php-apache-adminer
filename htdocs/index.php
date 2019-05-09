<?php

$db_server = "db";
$db_user = "root";
$db_password = "root";
$db_name = "information_schema";

$link = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if ($link) {
    echo "<h1>Connected to database server</h1>";
} else {
    echo "<h1>Not working</h1>";
}