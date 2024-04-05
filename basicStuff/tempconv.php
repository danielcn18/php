<?php
    $temp1 = $_POST['temp'];
    $type = $_POST['type'];

    if ($type == "To Celsius") {
        $result = fahrToCels($temp1);
        $final = "Celsius";
    } else if ($type == "To Fahrenheit") {
        $result = celsToFahr($temp1);
        $final = "Fahrenheit";
    }
    function fahrToCels($temp) {
        return (number_format(((float)$temp - 32) * 5 / 9, 2));
    }
    
    function celsToFahr($temp) {
        return (number_format(((float)$temp * 9 / 5) + 32, 2));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <form method="post">
        <label for="temp">Enter Degrees</label>
        <input type="text" name="temp" id="temp">
        <br>
        <input type="radio" name="type" value="To Celsius" checked>To Celsius</input>
        <br>
        <input type="radio" name="type" value="To Fahrenheit">To Fahrenheit</input>
        <br><br>
        <input type="submit" value ="Submit">
    </form>

    <p>It is <?php echo $result; ?> degrees <?php echo $final ?></p>
</body>
</html>