<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) 
{
	@$donorname = $_POST['donorname'];
	@$fooditem = $_POST['fooditem'];
    @$foodqty = $_POST['foodqty'];
    @$description=$_POST['description'];
    @$pickupdate=$_POST['pickupdate'];
    @$mobileno=$_POST['mobileno'];
    @$state=$_POST['state'];
    @$city=$_POST['city'];
    @$pickupaddress=$_POST['pickupaddress'];



  $sql = "INSERT INTO fooddetail (DName, FItem, FoodQty, Description ,PDate , MNo, State, City, PAddress ) VALUES ('$donorname', '$fooditem',  '$foodqty' ,'$description', '$pickupdate', '$mobileno', '$state', '$city', '$pickupaddress')";
  $result = mysqli_query($conn,$sql);

  if($result) 
  {
    echo "<script>alert('Wow Donation Completed.')</script>";
    @$donorname ="";
	@$fooditem ="";
    @$foodqty ="";
    @$description="";
    @$pickupdate="";
    @$mobileno="";
    @$state="";
    @$city="";
    @$pickupaddress="";
  }
  else
  {
    echo "<script>alert('Woops! Something Wrong Went.')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style_2.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <div class="container">
        <header>Food Details</header>
		<form action="" method="POST" class="login-email">
            <div class="form first">
                <div class="details personal">
                    <span class="title"></span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Donor Name</label>
                            <input type="text" placeholder="Enter Donor Name" name="donorname" value="<?php echo $donorname; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Food Item</label>
                            <input type="text" placeholder="Enter Food Name" name="fooditem" value="<?php echo $fooditem; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Food Qty</label>
                            <input type="text" placeholder="Food Qty(e.g. in terms of people) " name="foodqty" value="<?php echo $foodqty; ?>" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" placeholder="Description" name="description" value="<?php echo $description; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Pickup Date</label>
                            <input type="date" placeholder="Enter Pickup date" name="pickupdate" value="<?php echo $pickupdate; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" placeholder="Enter mobile number" name="mobileno" value="<?php echo $mobileno; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" name="state" value="<?php echo $state; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter your City" name="city" value="<?php echo $city; ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Pickup Address</label>
                            <input type="text" placeholder="Enter your Pickup Address" name="pickupaddress" value="<?php echo $pickupaddress; ?>" required>
                        </div>
                    </div>
                </div>
                
				<button name="submit" class="nextBtn">Add</button>
		
		        <button name="submit" class="nextBtn"><a href="donor.php">Back</a>
                </button>
                </div> 
            </div>

            </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>

