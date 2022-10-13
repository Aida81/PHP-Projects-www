<?php

$db_employee = "root";
$db_pass = "";
$db_name = "employee";

$db = new PDO('mysql:host = localhost; dbname=' . $db_name . ';charset-utf8', $db_employee, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
