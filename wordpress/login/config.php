<?php
session_start();
$host = "localhost"; /* Host name */
$user = "webadmin"; /* User */
$password = "webadmin"; /* Password */
$dbname = "myweb1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
