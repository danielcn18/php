<!-- Header -->
<?php include "header.php" ?>
<div class="container mt-5">
    <h1 class="text-center">Orders' Data</h1>
    <a href="create.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i> Create New Student</a>
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
                <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    $query = "SELECT * FROM orders";
                    $view_orders = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($view_orders)) {
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
                        echo " <td class='text-center'> <a href='view.php?&id={$order_id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a></td>";
                        echo " <td class='text-center'> <a href='update.php?edit&id={$order_id}' class='btn btn-secondary'> <i class='bi bi-pencil'></i> EDIT</a></td>";
                        echo " <td class='text-center'> <a href='delete.php?&delete&id={$order_id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE </a></td>";
                        echo " </tr>";
                    }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<?php include "footer.php" ?>