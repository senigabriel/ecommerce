<?php
$host = "sql201.infinityfree.com"; 
$dbname = "if0_38927844_userdb";
$username = "if0_38927844"; 
$password = "Beast300seni"; 
$conn = new mysqli($host, $username, $password, $dbname);

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$entered_password = $_POST['password'];

$sql = "SELECT password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.html");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}
?>
