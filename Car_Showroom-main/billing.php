<?php
session_start();

// Process form data (same as before)
$appointment = [
    'name' => $_POST['name'] ?? 'Not provided',
    'email' => $_POST['email'] ?? 'Not provided',
    'phone' => $_POST['phone'] ?? 'Not provided',
    'location' => $_POST['location'] ?? 'Not provided',
    'appointment_date' => $_POST['date'] ?? 'Not specified',
    'time_preference' => isset($_POST['time']) ? 
        ($_POST['time'] == 'morning' ? 'Morning' : 'Afternoon') : 'Not specified',
    'confirmation_method' => isset($_POST['chk2']) ? 
        ($_POST['chk2'] == 'email' ? 'Email' : 'Phone Call') : 'Not specified'
];

// Process checkboxes
$services = $_POST['chk1'] ?? [];
$payableAmount = count($services) * 50; // ₹50 per service

$_SESSION['form_data'] = $_POST;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bill</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="billing.css"/>
</head>
<body>
    <div class="container">
        <div class="bill">
            <h1 class="title">YOUR BILL</h1>
            <div class="showroom-name"><span>BCA</span><span>GADDIWALA</span></div>
            <table>
                <tr>
                    <th>Name</th>
                    <td><?= htmlspecialchars($appointment['name']) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($appointment['email']) ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?= htmlspecialchars($appointment['phone']) ?></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><?= htmlspecialchars($appointment['location']) ?></td>
                </tr>
                <tr>
                    <th>Appointment Date</th>
                    <td><?= htmlspecialchars($appointment['appointment_date']) ?></td>
                </tr>
                <tr>
                    <th>Time Preference</th>
                    <td><?= htmlspecialchars($appointment['time_preference']) ?></td>
                </tr>
                <tr>
                    <th>Confirmation By</th>
                    <td><?= htmlspecialchars($appointment['confirmation_method']) ?></td>
                </tr>
                <tr>
                    <th>Payable Amount</th>
                    <td>₹<?= number_format($payableAmount, 2) ?></td>
                </tr>
            </table>
        </div>
        <div class="button-container">
            <a href="http://localhost/Car_Showroom-main/" class="cancel-button">Cancel</a>
            <button id="pay-button" class="pay-button">book now</button>
        </div>
    </div>
    <script>
        document.getElementById('pay-button').addEventListener('click', function() {
            this.textContent = 'Processing...';
            this.disabled = true;

            setTimeout(function() {
                var bookingSuccessful = true;

                if (bookingSuccessful) {
                    window.location.href = 'thank_you.php?amount=<?= $payableAmount ?>';
                } else {
                    alert('Payment failed! Please try again.');
                    window.location.href = 'billing.php';
                }
            }, 3000);
        });
    </script>
</body>
</html>