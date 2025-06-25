<?php
session_start();
include 'connection.php';

if (isset($_SESSION['appointment']) && isset($_SESSION['services'])) {
    $appointment = $_SESSION['appointment'];
    $services = $_SESSION['services'];
    $payableAmount = $_SESSION['payableAmount'];

    $sql = "INSERT INTO bills (name, email, phone, location, appointment_date, time_preference, confirmation_method, payable_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $billing_db_conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssssd", $appointment['name'], $appointment['email'], $appointment['phone'], $appointment['location'], $appointment['appointment_date'], $appointment['time_preference'], $appointment['confirmation_method'], $payableAmount);

        if ($stmt->execute()) {
            $bill_id = $billing_db_conn->insert_id;

            foreach ($services as $service) {
                $service_sql = "INSERT INTO bill_services (bill_id, service_name) VALUES (?, ?)";
                $service_stmt = $billing_db_conn->prepare($service_sql);
                if ($service_stmt) {
                    $service_stmt->bind_param("is", $bill_id, $service);
                    $service_stmt->execute();
                    $service_stmt->close();
                } else {
                    error_log("Error inserting service: " . $billing_db_conn->error);
                }
            }
        } else {
            error_log("Error inserting bill: " . $stmt->error);
        }
        $stmt->close();
    } else {
        error_log("Error preparing statement: " . $billing_db_conn->error);
    }

    // Clear session data
    unset($_SESSION['appointment']);
    unset($_SESSION['services']);
    unset($_SESSION['payableAmount']);

    // No redirection here. javascript redirect from billing.php takes care of it.
    exit;
} else {
    // Handle cases where session data is missing
    header("Location: billing.php");
    exit;
}
?>