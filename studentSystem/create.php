<!-- Header -->
<?php include "header.php" ?>

<h1 class="text-center container mt-5">Add Student Details</h1>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="id" class="form-label">Student Id</label>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary mt-2" value="Submit">
        </div>
    </form>
</div>

<?php
if (isset($_POST['create']) && !empty($_POST['create'])) {
    $name_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";

    $student_id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    if (
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        preg_match($name_pattern, $fname) &&
        preg_match($name_pattern, $lname)
    ) {

        $query = "INSERT INTO student(id, firstname, lastname, email) VALUES('{$student_id}', '{$fname}', '{$lname}', '{$email}')";
        $add_student = mysqli_query($conn, $query);

        if (!$add_student) {
            echo "something went wrong" . mysqli_error($conn);
        } else {
            echo "<script type='text/javascript'>alert('Student added successfully!')</script>";
        }

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