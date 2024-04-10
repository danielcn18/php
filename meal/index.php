<!-- Header -->
<?php include "header.php" ?>
<div class="container mt-5">
    <h1 class="text-center">Orders' Data</h1>
    <a href="create.php" class="btn btn-outline-dark mb-2"><i class="bi bi-person-plus"></i> Create New Student</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
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
                        $strA = $row['straddr'];
                        $strA2 = $row['straddr2'];
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





<!-- body -->
<!-- <div class="container mt-5">
    <h1 class="text-center">Meal Delivery Order Form</h1>
    <h3 class="text-center">Student Registration System</h3> -->

    <!-- <div class="container">
        <form action="home.php" method="post">
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary mt-2" value="LETS DO IT!">
            </div>
        </form>
    </div> -->
    
    <!-- <form action="index.php" method="post">
        <div class="row">
            <div class="col mb-4">
                <label for="firstname">Name:</label>
                <input type="text" class="form-control form-o" name="fname" placeholder="First">
            </div>
            <div class="col mb-4">
                <label for="lastname"></label>
                <input type="text" class="form-control form-o" name="lname" placeholder="Last">
            </div>
        </div>
        <div class="form-group mb-4"> 
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control form-o" id="phone" placeholder="###-###-####">
        </div>
        <div class="form-group mb-4">
            <label for="address">Delivery Address: </label>
            <input type="street1" class="form-control mb-4 form-o" id="street1" placeholder="Street Address">
            <input type="street2" class="form-control form-o" id="street2" placeholder="Street Address Line 2">
        </div>
        <div class="row mb-4">
            <div class="col">
                <input type="text" class="form-control form-o" name="city" placeholder="City">
            </div>
            <div class="col">
                <input type="number" class="form-control form-o" minlength="5" maxlength="5" name="zip" placeholder="Zip">
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;">
                <img style="object-fit: cover; height: 100%; width: 100%; border-radius: 0.5rem;" src="./image1.jpg" alt="image" class="img-thumbnail">
            </div>
            <div class="card-body"> 
                <h5 class="card-title text-right">Monday</h5>
                <p class="card-text">Smoked Honey Maple Ham</p>
                <h4 class="card-title">$15.00</h4>
                <p class="card-text">Quantity</p>
                <input style="height: 2.2rem;" type="number" value="1">
                <button type="button" class="btn btn-primary bg-primary" style="background-image: linear-gradient(to right, #08b2e3, #7c98b3); color: #fff; border-color: #7ee8fa;">Add To Cart</button>
            </div>
        </div>
        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;">
                <img style="object-fit: cover; width: 100%; height: 100%; border-radius: 0.5rem;" src="./image2.jpg" alt="image" class="img-thumbnail">
            </div>
            <div class="card-body">
                <h5 class="card-title text-right">Tuesday</h5>
                <p class="card-text">Lemon Bar</p>
                <h4 class="card-title">$4.50</h4>
                <p class="card-text">Quantity</p>
                <input style="height: 2.2rem;" type="number" value="1">
                <button type="button" class="btn btn-primary bg-primary" style="background-image: linear-gradient(to right, #08b2e3, #7c98b3); color: #fff; border-color: #7ee8fa;">Add To Cart</button>
            </div>
        </div>
        <div class="card d-flex flex-row w-full mb-4" style="padding: 1rem; border-radius: 1rem;"> 
            <div style="width: 30rem; height: 15rem;">
                <img style="height: 100%; object-fit: cover; width: 100%; border-radius: 0.5rem;" src="./image3.jpg" alt="image" class="img-thumbnail"></div>
            <div class="card-body">
                <h5 class="card-title text-right">Wednesday</h5>
                <p class="card-text">Beef Stroganoff</p>
                <h4 class="card-title">$20.00</h4>
                <p class="card-text">Quantity</p>
                <input style="height: 2.2rem;" type="number" value="1">
                <button type="button" class="btn btn-primary bg-primary" style="background-image: linear-gradient(to right, #08b2e3, #7c98b3); color: #fff; border-color: #7ee8fa;">Add To Cart</button>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg bg-dark border-light">Add Order</button>
        </div>

    </form> -->
<!-- </div> -->
