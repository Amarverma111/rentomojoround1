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
.a
{
	
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
<div class="col-sm-5" style="background-color: white; margin-top: 40px;">
	
<p class="text-left"><i class="fa fa-arrow-left"> </i> Add new contact</p>
<form method="post" action="insert.php">
<p class="text-left">Name </p>
<input type="text" name="Name" placeholder="Name"  style="height: 40px; width: 260px;" /> 

<p class="text-left">DOB </p>
<input type="date" name="DOB" placeholder="dd/mm/yyyy"  style="height: 40px; width: 260px;" />
<br>
<small>Mobile Number</small>
<input type="text" name="Phoneno" placeholder="+91 XXXXXXXXXX"   max="10" style="height: 30px; width: 180px;" />
  &nbsp;<i class="fa fa-plus" id="click"> </i>

  <br/>
  <br/>
  <input type="text" name="phoneno1" class="a" placeholder="+91 XXXXXXXXXX"   max="10" style="height: 30px; width: 180px;" />
  &nbsp;<i class="a fa fa-plus"> </i>
<br>
<small>Email</small> <br>
<input type="Email" name="email" placeholder="xyz@gmail.com" max="10" style="height: 30px; width: 180px;" />
<i class="a fa fa-plus" > </i>
<br>
<br>
<p class="text-right">
<input type="submit" class="btn btn-success " style="border-radius: 5px; "></button>
</p>
<br>

 </form>


	</div>
</center>

	</td>
</tr>
</table>



	
		

	



</table>


</div>

	</div>
	<div class="col-sm-2">
	</div>



	</div>
</div>


</body>
</html>