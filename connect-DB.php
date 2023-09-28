<!-- Connecting -->
<?php
$databaseName = 'NALTLAND_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = '';
$password = '';

$pdo = new PDO($dsn, $username, $password);
?>

<!-- Connection Complete -->
