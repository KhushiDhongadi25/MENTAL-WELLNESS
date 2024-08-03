<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root"; // change to your database username
$password = ""; // change to your database password
$dbname = "umatter_db"; // change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if username exists
    if ($stmt->num_rows == 1) {
        // Bind result variables
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a new session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;

            // Redirect to a welcome page or dashboard
            header("Location: home/home_pgs.php");
            exit();
        } else {
            // Display an error message for invalid password
            echo "Invalid password.";
        }
    } else {
        // Display an error message for invalid username
        echo "Invalid username.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
