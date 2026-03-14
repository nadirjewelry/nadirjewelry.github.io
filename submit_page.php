<?php
// Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve and sanitize data to prevent malicious input
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);
    
    // Validate inputs
    if (empty($name) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        // Process data (e.g., save to database, send email)
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "Thank you, " . $name . ".<br>";
        echo "We will contact you at: " . $email;
    }
} else {
    // If someone tries to access this page directly, redirect back
    echo "Access denied.";
}
?>