<?php
include_once("passwords.php5");

$DB_SERVER = "mysql-be-yes-I-really-mean-prod.shodor.org";
$SNAP2_DB_NAME = "db_snap";
$SNAP2_DB_USER = "db_snap_user";

$SDR_DB_NAME = "db_sdr";
$SDR_DB_USER = "search_sdr";

$MAIN_DB_NAME = "db_main_misc";
$MAIN_DB_USER = "adm_main_misc";

$snap2DbConn = new mysqli($DB_SERVER, $SNAP2_DB_USER, $SNAP2_DB_PASS, $SNAP2_DB_NAME);
if ($snap2DbConn->connect_error) {
  die("Database connection failed: " . $snap2DbConn->connect_error);
}
$sdrDbConn = new mysqli($DB_SERVER, $SDR_DB_USER, $SDR_DB_PASS, $SDR_DB_NAME);
if ($sdrDbConn->connect_error) {
  die("Database connection failed: " . $sdrDbConn->connect_error);
}
$mainDbConn = new mysqli($DB_SERVER, $MAIN_DB_USER, $MAIN_DB_PASS, $MAIN_DB_NAME);
if ($mainDbConn->connect_error) {
  die("Database connection failed: " . $mainDbConn->connect_error);
}
?>

