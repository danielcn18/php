<?php include "header.php" ?>
    
    <form action="" method="post" style="width: 80%; margin: 2rem 10% 0 10%;">
        <div class="row">
            <div class="col mb-4">
                <label for="firstname">Name:<span class="required">*</span></label>
                <input type="text" class="form-control form-o" name="fname" placeholder="First" required>
            </div>
            <div class="col mb-4">
                <label for="lastname"></label>
                <input type="text" class="form-control form-o" name="lname" placeholder="Last" required>
            </div>
        </div>
        <div class="form-group mb-4"> 
            <label for="phone">Phone Number:<span class="required">*</span></label>
            <input type="tel" class="form-control form-o" id="phone" name="phone" placeholder="###-###-####" required>
        </div>
        <div class="form-group mb-4">
            <label for="street1">Delivery Address:<span class="required">*</span></label>
            <input type="street1" class="form-control mb-4 form-o" id="street1" name="streetaddress" placeholder="Street Address" required>
            <label for="street2">Delivery Address Line 2:</label>
            <input type="street2" class="form-control form-o" id="street2" name="streetaddress2" placeholder="Street Address Line 2">
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="city">City:<span class="required">*</span></label>
                <input type="text" class="form-control form-o" name="city" placeholder="City" required>
            </div>
            <div class="col">
                <label for="zip">Zip:<span class="required">*</span></label>
                <input type="number" class="form-control form-o" maxlength="5" name="zip" placeholder="Zip" required>
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
            <input type="submit" name="create" class="btn btn-primary btn-lg bg-dark border-light" value="Add Order">
        </div>

    </form>

    <div class="container text-center">
        <a href="index.php" class="btn btn-warning mt-5 mb-5">Back</a>
    </div>

<?php

    // error here, the if statement isn't being called. 
    if (isset($_POST['create']) && !empty($_POST['create'])) {
        $name_pattern = "/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/";
        $phone_pattern = "/^[1-9]\d{2}-\d{3}-\d{4}$/";
        $straddr_pattern = "/^\d{1,6}\040([A-Z]{1}[a-z]{1,}\040[A-Z]{1}[a-z]{1,})$/";
        $city_pattern = "/^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/";
        $zip_pattern = "/^[0-9]{5}(?:-[0-9]{4})?$/";

        // $student_id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $straddr = $_POST['streetaddress'];
        $straddr2 = $_POST['streetaddress2'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];

        if(true) {
            // echo $student_id;
            echo "$fname<br>";
            echo "$lname<br>";
            echo "$phone<br>";
            echo "$straddr<br>";
            echo "$straddr2<br>";
            // echo gettype($straddr2);
            echo "$city<br>";
            echo "$zip";
        }

        if (
            // filter_var($email, FILTER_VALIDATE_EMAIL) &&
            preg_match($name_pattern, $fname) &&
            preg_match($name_pattern, $lname) &&
            preg_match($phone_pattern, $phone) &&
            preg_match($straddr_pattern, $straddr)
        ) {
            if($straddr2 == "") $straddr2 = NULL;
            $query = "INSERT INTO orders(firstname, lastname, phone, streetaddress, streetaddress2, city, zip) VALUES('{$fname}', '{$lname}', '{$phone}', '{$straddr}', '{$straddr2}', '{$city}', '{$zip}')";
            $add_order = mysqli_query($conn, $query);

            if (!$add_order) {
                echo "something went wrong" . mysqli_error($conn);
            } else {
                echo "<script type='text/javascript'>alert('Student added successfully!')</script>";
            }

            // header("Location: home.php");
        } else {
            echo "<div class='container text-danger'>Field Inputs Are Not Acceptable</div>";
        }
    }

    include "footer.php" 
?>