<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "umatter_db"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize($data) {
    // Use mysqli_real_escape_string or other methods to sanitize data
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Check if username or email already exists
    $sql_check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // User or email already exists
        $message = "Username or email already exists!";
        header("Location: stu_signup.php?message=" . urlencode($message));
        exit();
    } else {
        // Insert new user data into database
        $sql_insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        if ($conn->query($sql_insert) === TRUE) {
            // Insert successful
            $messages = "User registered successfully";
            header("Location: stu_signup.php?messages=" . urlencode($messages));
            exit();
        } else {
            // Insert failed
            $messages = "Error: " . $sql_insert . "<br>" . $conn->error;
            header("Location: stu_signup.php?message=" . urlencode($messages));
            exit();
        }
    }
}

// Close database connection
$conn->close();
?>