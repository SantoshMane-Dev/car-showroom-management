<?php
include 'connection.php';

session_start();

$amount = $_GET['amount'] ?? 0;

$form_data = $_SESSION['form_data'];

$appointment = [
    'name' => $form_data['name'] ?? 'Not provided',
    'email' => $form_data['email'] ?? 'Not provided',
    'phone' => $form_data['phone'] ?? 'Not provided',
    'location' => $form_data['location'] ?? 'Not provided',
    'appointment_date' => $form_data['date'] ?? 'Not specified',
    'time_preference' => isset($form_data['time']) ? 
        ($form_data['time'] == 'morning' ? 'Morning' : 'Afternoon') : 'Not specified',
    'confirmation_method' => isset($form_data['chk2']) ? 
        ($form_data['chk2'] == 'email' ? 'Email' : 'Phone Call') : 'Not specified'
];

// Process checkboxes
$services = $form_data['chk1'] ?? ['No services selected'];
$payableAmount = count($services) * 50; // ₹50 per service

// SQL INSERT Statement for bills table:
$sql = "INSERT INTO bills (name, email, phone, location, appointment_date, time_preference, confirmation_method, payable_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $billing_db_conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssssd", $appointment['name'], $appointment['email'], $appointment['phone'], $appointment['location'], $appointment['appointment_date'], $appointment['time_preference'], $appointment['confirmation_method'], $payableAmount);

    if ($stmt->execute()) {
        $bill_id = $billing_db_conn->insert_id; // Get the last inserted ID.

        // Insert services into bill_services table:
        foreach ($services as $service) {
            $service_sql = "INSERT INTO bill_services (bill_id, service_name) VALUES (?, ?)";
            $service_stmt = $billing_db_conn->prepare($service_sql);
            if ($service_stmt) {
                $service_stmt->bind_param("is", $bill_id, $service);
                $service_stmt->execute();
                $service_stmt->close();
            } else {
                // Log error instead of displaying it
                error_log("Error inserting service: " . $billing_db_conn->error);
            }
        }
    } else {
        // Log error instead of displaying it
        error_log("Error inserting bill: " . $stmt->error);
    }

    $stmt->close();
} else {
    // Log error instead of displaying it
    error_log("Error preparing statement: " . $billing_db_conn->error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>booking successfully</title>
    <style>
        body { font-family: 'Roboto', sans-serif; text-align: center; padding: 50px; }
        h1 { color: #27ae60; }
    </style>
</head>
<body><h1>Booking Successfully</h1>
<b><center>Your payable amount is: ₹<?= number_format($amount, 2) ?></center></b>

<p style="background-color: #f9f9f9; border: 2px solid #27ae60; padding: 15px; border-radius: 8px; color: #333; font-size: 1rem; text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <strong>NOTE:</strong> On the day of your appointment, please visit us at the shop where you can pay the bill at the counter. After payment, we’ll proceed with the services you’ve selected. We look forward to serving you and making sure you have a great experience with us! 
    <span style="color: #27ae60;">₹<?= number_format($amount, 2) ?></span>.
</p>

<!-- Terms and Conditions Checkbox -->
<div style="text-align: center; margin-top: 20px;">
    <label for="terms" style="font-size: 1rem;">
        <input type="checkbox" id="terms" name="terms">"I have read the note and agree to follow the instructions."
    </label>
</div>

<!-- Return Home Button (Initially Disabled) -->
<div style="text-align: center; margin-top: 20px;">
    <a href="http://localhost/Car_Showroom-main/" id="return-home-link" class="btn" style="text-decoration: none; padding: 10px 30px; background-color: #27ae60; color: white; border-radius: 5px; font-weight: bold; cursor: pointer; opacity: 0.6;" onclick="return validateTerms();">Return Home</a>
</div>

<script>
    // Function to validate if the Terms and Conditions checkbox is checked
    function validateTerms() {
        var checkbox = document.getElementById('terms');
        var returnHomeLink = document.getElementById('return-home-link');
        
        // Check if the checkbox is checked
        if (!checkbox.checked) {
            alert('Please agree to the Terms and Conditions before proceeding.');
            return false; // Prevent the redirect
        }
        
        // If checkbox is checked, allow the redirection
        return true;
    }

    // Enable the "Return Home" button only when checkbox is checked
    document.getElementById('terms').addEventListener('change', function() {
        var returnHomeLink = document.getElementById('return-home-link');
        if (this.checked) {
            returnHomeLink.style.opacity = 1; // Make the link fully visible (active)
            returnHomeLink.style.cursor = 'pointer'; // Enable pointer cursor
        } else {
            returnHomeLink.style.opacity = 0.6; // Dim the link
            returnHomeLink.style.cursor = 'not-allowed'; // Disable cursor
        }
    });
</script>

</body>
</html>
