<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) 
{
	@$RName = $_POST['receivername'];
	@$FQty= $_POST['foodqty'];
    @$Description = $_POST['description'];
    



  $sql = "INSERT INTO receiver (RName, FQty, Description ) VALUES ('$RName', '$FQty',  '$Description' )";
  $result = mysqli_query($conn,$sql);

  if($result) 
  {
    echo "<script>alert('Wow Request Place Successfully.')</script>";
    @$RName ="";
    @$FQty ="";
    @$Description="";
	
  }
  else
  {
    echo "<script>alert('Woops! Something Wrong Went.')</script>";
  }
  
  session_destroy();
  header("Location: receiver.php");
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style_1.css">

	<title></title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Place a Request</p>
			<div class="input-group">
				<input type="text" placeholder="Receiver Name" name="receivername" value="<?php echo $RName; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Food Qty" name="foodqty" value="<?php echo $FQty; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Description" name="description" value="<?php echo $Description; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			
		</form>
	</div>
</body>
</html>