<?php 
    if (!isset($user_email)) {
        $user_email = "";
    }

    if (!isset($user_name)) {
        $user_name = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters Demo</title>
</head>
<body>
    <h1>User Registration Form</h1>
    <form action="registration.php" method="post">
        <label>User Name: </label>
        <input type="text" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>">
        <br>
        <label>User Email: </label>
        <input type="text" name="user_email" value="<?php echo htmlspecialchars($user_email); ?>">
        <label>&nbsp;</label>
        <input type="submit" value="Submit">
    </form>
</body>
</html>