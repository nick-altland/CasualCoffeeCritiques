<!-- Connecting -->
<?php
$databaseName = 'NALTLAND_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'naltland_writer';
$password = 'GpPrWBg5FwFE';

$pdo = new PDO($dsn, $username, $password);
?>

<!-- Connection Complete -->