<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $consent = isset($_POST['consent']) ? 1 : 0;
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: newsletter.php?error=invalid_email");
        exit();
    }
    
    // Database connection (you'll need to set up your database credentials)
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email, consent, subscription_date) VALUES (:email, :consent, NOW())");
        
        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':consent', $consent);
        
        // Execute the statement
        $stmt->execute();
        
        // Redirect to success page
        header("Location: newsletter.php?success=1");
        exit();
        
    } catch(PDOException $e) {
        // Log error and redirect
        error_log("Error: " . $e->getMessage());
        header("Location: newsletter.php?error=database_error");
        exit();
    }
} else {
    // If not POST request, redirect to form
    header("Location: newsletter.php");
    exit();
}
?> 