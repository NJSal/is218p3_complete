<?php
$username = 'dfs23';
$password = 'DOmg1XBE';
$hostname = 'sql1.njit.edu';
$project = "dfs23";
$dsn = "mysql:host=$hostname;dbname=$username";
try {
    $db = new PDO($dsn, $username, $password);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>