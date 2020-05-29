<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 List Group with Linked Items</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
#accordion section p
    {
        display: none;
        text-align: center;

    }
    #accordion section a
    {
        text-align: center;
        color: black;
        text-decoration: none;

    }

    #accordion section a
    {
        text-decoration: underline;

    }
    #accordion section:target p
    {
        display:block;
    }
</style>

<script type="text/javascript">


  
$(document).ready(function() {
  $("#click").click(function() {
    $(".a").toggle();
  });
});

</script>


<html>
<body>


	
<div class="container mt-3">
	<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">

<div class="col-sm-12">

<table class=" table table-sm ">
	
		<tr class="table-primary">
			<td > <b>RM-PHONEBOOK </b>
			</td>
		</tr>

<tr style="background-color: #dbdfe5; height: 600px;">
	<td>
    <center>
<div class="col-sm-8" style="background-color: white; margin-top: 40px;">
	
<div class="col-sm-8 ">
                <div class="input-group">
                    <input type="text" class="form-control"   id="search" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

<ul class="list-unstyled"></ul>
<script>
const fruits=['Amar verma','karan verma','abhishek','mohit','arun','arjun','dhamendra','deol','das','deepak'];
document.getElementById('search').addEventListener('input',(e)=>{
let fruitsArray=[];

if(e.target.value)
{
fruitsArray =fruits.filter(fruit=>fruit.toLowerCase().includes(e.target.value));
fruitsArray=fruitsArray.map(fruit=>`<li>${fruit}</li>`)
}
showFruitsArray(fruitsArray);

});


function showFruitsArray(fruitsArray){
const html = !fruitsArray.length? ' ' : fruitsArray.join(' ');
document.querySelector('ul').innerHTML = html;
}
</script>
<?php



$con = mysqli_connect('localhost','root' ,'' ,'rento');

function showdata()
{
global $con;
$query="SELECT * FROM `first`";
$run= mysqli_query($con,$query);
if($run ==TRUE){
?>
<?php 
while($data = mysqli_fetch_assoc($run))
{
?>





<main id="accordion">
<section id="Items1">
   <table border="1" class="col-sm-8"> <tr><td><small> <a href="#Items1" style="text-decoration:none;"> <?php echo $data['Name'];?> 
   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-down" > </i></a> </small></td> </tr> </table>
    <p class="col-sm-8" style="background-color: #dbdfe5">
  <small>  <?php echo $data['DOB']; ?> </small>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-sm" style="margin-top: 20px;">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 20px;">Remove</button>
      
      <br> 
      <br>
      <i class="fa fa-phone"style="font-size:20px"></i> <small>+91<?php echo $data['Phoneno']; ?> </small> 
      <br>
    <i class="fa fa-envelope " style="font-size:20px"></i><small class="text-right"> &nbsp;<?php echo $data['email']; ?> </small>

        <br>
        <br>
       
   </p>
<?php
}

 ?> </section> <?php
}
else
{
echo "error";
}

}

?>
<?php 

showdata();
?>



<section id="Items2">
   <table border="1" class="col-sm-8"> <tr><td><small> <a href="#Items2" style="text-decoration: none;">Amar &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" > </i></a> </small></td> </tr> </table>
    <p class="col-sm-8" style="background-color: #dbdfe5">
    DOB&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-sm" style="margin-top: 20px;">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 20px;">Remove</button>
      
      <br> 
      <br>
      <i class="fa fa-phone"style="font-size:20px"></i> <small>+91 9915515158</small> 
      <br>
    <i class="fa fa-envelope " style="font-size:20px"></i><small class="text-right"> &nbsp;amar9852@gmail.com </small>

        <br>
        <br>
       
   </p>
</section>

<section id="Items3">
   <table border="1" class="col-sm-8"> <tr><td><small> <a href="#Items3" style="text-decoration: none;">Amar &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" > </i></a> </small></td> </tr> </table>
    <p class="col-sm-8" style="background-color: #dbdfe5">
    DOB&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info btn-sm" style="margin-top: 20px;">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 20px;">Remove</button>
      
      <br> 
      <br>
      <i class="fa fa-phone"style="font-size:20px"></i> <small>+91 9915515158</small> 
      <br>
    <i class="fa fa-envelope " style="font-size:20px"></i><small class="text-right"> &nbsp;amar9852@gmail.com </small>

        <br>
        <br>
       
   </p>
</section>
</main>
</div>





</div>
</div>
</div>









<div class="col-sm-2">
</div>
</div>
</div>

</body>
</html>