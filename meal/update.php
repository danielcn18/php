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
        $streetaddress2 = $row['streetaddress2'];
        $city = $row['city'];
        $zip = $row['zip'];
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
            <label for="streetaddress" class="form-label">Street Address 2</label>
            <input type="text" name="streetaddress2" class="form-control" value="<?php echo $streetaddress2 ?>">
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
    </form>
</div>

<?php 



    if(isset($_POST['update'])) {
        $name_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $streetaddress = $_POST['streetaddress'];
        $streetaddress2 = $_POST['streetaddress2'];
        $city = $_POST['city'];
        $zip = $_POST   ['zip'];

        echo preg_replace('/[^0-9]/', '', $_POST['phone']);

    if (
        preg_match($name_pattern, $fname) &&
        preg_match($name_pattern, $lname) 
        // preg_replace('/[^0-9]/', '', $_POST['phone'])
    ) { 
        // if($streetaddress2 == "") $streetaddress2 = null;
        $query = "UPDATE orders SET id = '{$order_id}', firstname = '{$fname}', lastname = '{$lname}', phone = '{$phone}', streetaddress = '{$streetaddress}', streetaddress2 = '{$streetaddress2}', city = '{$city}', zip = '{$zip}' WHERE id = $order_id";
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
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<?php include "footer.php" ?>