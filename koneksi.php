<?php
// Script untuk membuat koneksi ke database PostgreSQL
// Sesuaikan username, password, dan dbname

$dsn = "pgsql:host=localhost;port=5433;dbname=kemker_umkm5";
$dbuser = 'postgres';
$dbpass = '12345';

try {
    $conn = new PDO($dsn, $dbuser, $dbpass);
    // set mode error PDO menjadi exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //echo "Connected successfully";
} catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}
?>
