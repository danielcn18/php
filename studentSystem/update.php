<!-- Header -->
<?php include "header.php" ?>

<?php 
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $student_id = $_GET['id'];
    }

    $query = "SELECT * FROM student WHERE id = {$student_id}";
    $view_students = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($view_students)) {
        $student_id = $row["id"];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $email = $row['email'];
    }
?>

<h1 class="text-center container mt-5">Update Student Details</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="id" class="form-label">Student Id</label>
            <input type="text" name="id" class="form-control" value="<?php echo $student_id ?>">
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
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
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
        $email = $_POST['email'];

    if (
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        preg_match($name_pattern, $fname) &&
        preg_match($name_pattern, $lname)
    ) {
        $query = "UPDATE student SET id = '{$student_id}', firstname = '{$fname}', lastname = '{$lname}', email = '{$email}' WHERE id = $student_id";
        $update_student = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert('Student data updatedd successfully!')</script>";

        header("Location: home.php");
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