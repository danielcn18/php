<!-- Header -->
<?php include "header.php" ?>

<?php 
    if(isset($_GET['id'])) {
        $order_id = $_GET['id'];
        $query = "DELETE FROM orders WHERE id = {$order_id}";
        $delete_query = mysqli_query($conn, $query);
        header("Location: index.php");
    }
?>

<!-- Back Button -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<?php include "footer.php" ?>