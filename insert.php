<!DOCTYPE html>
<html>
<body>

<?php 

$name = $_POST['Name'];
$dob= $_POST['DOB'];
$number1= $_POST['Phoneno'];
$number2= $_POST['phoneno1'];
$email = $_POST['email'];


$con = mysqli_connect('localhost','root' ,'' ,'newcontacts');



$query="INSERT INTO `newlist`(`Name`, `DOB`, `Phoneno`, `Phoneno1`, `email`) VALUES ('$name','$dob','$number1','$number2','$email')";


$run= mysqli_query($con,$query);

if($run == TRUE)
echo "Data insert successfully <a href='form.php'>Click here to insert </a> ";
else
echo "Error";



?> 

</body>
</html>
