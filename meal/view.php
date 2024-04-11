<!-- Header -->
<?php include "header.php" ?>

<h1 class="text-center container mt-5">Order Details</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Order ID</th>     
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Str. Address</th>
                <th scope="col">Str. Address Line 2</th>
                <th scope="col">City</th>
                <th scope="col">Zip</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    if (isset($_GET['id'])) {
                        $order_id = $_GET['id'];

                        $query = "SELECT * FROM orders WHERE id = $order_id";
                        $view_students = mysqli_query($conn, $query);

                        while($row = $view_students->fetch_assoc()) {
                            $order_id = $row['id'];
                            $fname = $row['firstname'];
                            $lname = $row['lastname'];
                            $phone = $row['phone'];
                            $strA = $row['streetaddress'];
                            $strA2 = $row['streetaddress2'];
                            $city = $row['city'];
                            $zip = $row['zip'];
                            echo "<tr >";
                            echo " <th scope='row' >{$order_id}</th>";
                            echo " <td > {$fname}</td>";
                            echo " <td > {$lname}</td>";
                            echo " <td > {$phone}</td>";
                            echo " <td > {$strA}</td>";
                            echo " <td > {$strA2}</td>";
                            echo " <td > {$city}</td>";
                            echo " <td > {$zip}</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<!-- Back Button -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
</div>

<!-- Footer -->
<?php include "footer.php" ?>