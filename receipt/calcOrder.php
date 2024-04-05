

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Price</title>
</head>
<body>
    <form method="POST" action="calc.php">
        <label for="price">Price: </label>
        <input type="text" name="price" id="price">
        <br><br>
        <label for="quantity">Quantity: </label>
        <input type="text" name="quantity" id="quantity">
        <br>
        <br>
        <label for="discount">Discount: </label>
        <select id="discount" name="discount">
            <option value=".1">10%</option>
            <option value=".2">20%</option>
            <option value=".4">40%</option>
        </select>
        <br>
        <p>Tax: (7.5%)</p>
        <label for="shipping">Shipping Speed: </label>
        <select id="shipping" name="shipping">
            <option value="5">Slow ($5)</option>
            <option value="10">Medium ($10)</option>
            <option value="20">Fast ($20)</option>
        </select>
        <br>
        <br>
        <label for="payments">Number of Payments: </label>
        <input type="text" name="payments" id="payments">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>