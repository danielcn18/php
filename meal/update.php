<!-- Header -->
<?php include "header.php" ?>

<?php 
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $order_id = $_GET['id'];
    }

    $query = "SELECT * FROM orders WHERE id = {$order_id}";
    $view_orders = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($view_orders)) {
        $order_id = $row["id"];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $phone = $row['phone'];
        $streetaddress = $row['streetaddress'];
        $city = $row['city'];
        $zip = $row['zip'];
        // CONTINUE HERE, add (food) $items for obtaining the value already declared in database
    }
?>

<h1 class="text-center container mt-5">Update Student Details</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="id" class="form-label">Student Id</label>
            <input type="text" name="id" class="form-control" value="<?php echo $order_id ?>">
        </div>
        <div class="form-group">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $fname ?>">
        </div>
        <div class="form-group">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $lname ?>">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" value="<?php echo $phone ?>">
        </div>
        <div class="form-group">
            <label for="streetaddress" class="form-label">Street Address</label>
            <input type="text" name="streetaddress" class="form-control" value="<?php echo $streetaddress ?>">
        </div>
        <div class="form-group">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $city ?>">
        </div>
        <div class="form-group">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" name="zip" class="form-control" value="<?php echo $zip ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Submit">
        </div>
        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;"> 
                <img style="height: 100%; object-fit: cover; width: 100%; border-radius: 0.5rem;" src="./image1.jpg" alt="image" class="img-thumbnail">
            </div> 
            <div class="card-body"> 
                <h5 class="card-title text-right">Monday</h5> 
                <p class="card-text">Smoked Honey Maple Ham</p> 
                <h4 class="card-title">15.00</h4> 
                <p class="card-text">Quantity</p> 
                <input type="hidden" name="item[]" value="Smoked Honey Maple Ham"> 
                <input type="hidden" name="price[]" value="15.00"> 
                <input style="height: 2.2rem;" type="number" name="quantity[]" value="0" min="0" max="100"> 
            </div> 
        </div>
        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;"> 
                <img style="height: 100%; object-fit: cover; width: 100%; border-radius: 0.5rem;" src="./image2.jpg" alt="image" class="img-thumbnail">
            </div> 
            <div class="card-body"> 
                <h5 class="card-title text-right">Tuesday</h5> 
                <p class="card-text">Lemon Bar</p> 
                <h4 class="card-title">$4.50</h4> 
                <p class="card-text">Quantity</p> 
                <input type="hidden" name="item[]" value="Lemon Bar"> 
                <input type="hidden" name="price[]" value="4.50"> 
                <input style="height: 2.2rem;" type="number" name="quantity[]" value="0" min="0" max="100"> 
            </div> 
        </div>
        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;"> 
                <img style="height: 100%; object-fit: cover; width: 100%; border-radius: 0.5rem;" src="./image3.jpg" alt="image" class="img-thumbnail">
            </div> 
            <div class="card-body"> 
                <h5 class="card-title text-right">Wednesday</h5> 
                <p class="card-text">Beef Stroganoff</p> 
                <h4 class="card-title">$20.00</h4> 
                <p class="card-text">Quantity</p> 
                <input type="hidden" name="item[]" value="Beef Stroganoff"> 
                <input type="hidden" name="price[]" value="20.00"> 
                <input style="height: 2.2rem;" type="number" name="quantity[]" value="0" min="0" max="100"> 
            </div> 
        </div>
    </form>
</div>

<?php 



    if(isset($_POST['update'])) {
        $name_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $streetaddress = $_POST['streetaddress'];
        // $streetaddress2 = $_POST['streetaddress2'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];

        $items = [];
        if (isset($_POST['item']) && isset($_POST['quantity']) && isset($_POST['price'])) {
            $items = array_map(function ($item, $quantity, $price) {
                return [
                    'name' => $item,
                    'quantity' => $quantity,
                    'price' => $price
                ];
            }, $_POST['item'], $_POST['quantity'], $_POST['price']);
        }
        
        // Convert the array of items to JSON format
        $itemsJson = json_encode($items);$items = json_decode($row['items']);

        echo preg_replace('/[^0-9]/', '', $_POST['phone']);

    if (
        preg_match($name_pattern, $fname) &&
        preg_match($name_pattern, $lname) 
        // preg_replace('/[^0-9]/', '', $_POST['phone'])
    ) { 
        // if($streetaddress2 == "") $streetaddress2 = null;
        $query = "UPDATE orders SET id = '{$order_id}', firstname = '{$fname}', lastname = '{$lname}', phone = '{$phone}', streetaddress = '{$streetaddress}', city = '{$city}', zip = '{$zip}', items = `{$itemsJson}` WHERE id = $order_id";
        $update_student = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Student data updatedd successfully!')</script>";

        header("Location: index.php");
    } else {
        echo "<div class='container text-danger'>Field Inputs Are Not Acceptable</div>";
    }
}

?>

<!-- Back Button -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5">Back</a>
</div>

<?php include "footer.php" ?>