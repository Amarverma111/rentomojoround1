

<?php 

$name = $_POST['amar'];
$date= $_POST['date'];
$call= $_POST['call'];
$call2= $_POST['call2'];
$emails = $_POST['emails'];


$con = mysqli_connect('localhost','root' ,'' ,'rento');



$query="INSERT INTO `first`(`Name`, `DOB`, `Phoneno`, `Phoneno1`, `email`) VALUES ('$name','$date','$call','$call2','$emails')";


$run= mysqli_query($con,$query);

if($run == TRUE)
echo "Data insert successfully <a href='form.php'>Click here to insert </a> ";
else
echo "Error";



?> 


