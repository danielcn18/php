<?php 
// get the form data
$user_name = filter_input(INPUT_POST, 'user_name');
$user_email = filter_input(INPUT_POST, 'user_email', FILTER_VALIDATE_EMAIL);

$user_email = $_POST['user_email'];
$user_email = filter_var($user_email, FILTER_SANITIZE_EMAIL);

// Validate data
$error_message = '';
if (empty($user_name)) {
    $error_message = 'User name is a required field.<br>';
    echo $error_message;
}

if (empty($user_email)) {
    $error_message = 'User Email is required. <br>';
    echo $error_message;
} else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid email format";
    echo $error_message;
}

if($error_message != '') {
    include('filtersdemo.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Predefined Filter</title>
</head>
<body>
    <h1>User Registration Form</h1>
        <label>User Name: </label>
        <span><?php echo htmlspecialchars($user_name); ?></span><br>

        <label>User Email: </label>
        <span><?php echo htmlspecialchars($user_email); ?></span><br>
</body>
</html>