<?php 

$fname="";
$lname="";
$email="";
$qty="";
$price="";



if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];

    $price*=$qty;

}




$conn=mysqli_connect("localhost","root","","test");

$sql="INSERT INTO record(fname,lname,email,qty,price)VALUES
('{$fname}','{$lname}','{$email}','{$qty}','{$price}')";

if(mysqli_query($conn,$sql))
{
     echo "connection successfully";
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User input</title>
</head>
<body>
    

<form action="" method="POST">


<label for="fname">First Name:</label>
<input type="fname" name="fname"><br>

<label for="lname">Last Name:</label>
<input type="lname" name="lname"><br>

<label for="email">Email:</label>
<input type="email" name="email"><br>

<label for="qty">Quantity:</label>
<input type="number" name="qty"><br>

<label for="price">Total Price:</label>
<input type="number" name="price" placeholder="Each Price"><br>

<input type="submit" value="submit" name="submit">

</form>


<h4>Customer Information:</h4>
   
First Name:<?php echo $fname; ?><br>
Last Name:<?php echo $lname; ?><br>
Email:<?php echo $email; ?><br>
Quantity:<?php echo $qty; ?><br>
Total Price:<?php echo $price; ?><br>
    
  

</body>
</html>