<?php
// Database configuration for billing_db
$billing_db_host = 'localhost';
$billing_db_user = 'root';
$billing_db_pass = '';
$billing_db_name = 'billing_db';

$billing_db_conn = new mysqli($billing_db_host, $billing_db_user, $billing_db_pass, $billing_db_name);

if ($billing_db_conn->connect_error) {
    die("billing_db connection failed: " . $billing_db_conn->connect_error);
}

// Function to close connections
function closeBillingDbConnection($conn) {
    $conn->close();
}
?>