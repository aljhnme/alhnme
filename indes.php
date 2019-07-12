<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br>
	<h2 class="text-white bg-dark text-center">

         Enter your information
         		
	</h2>
	<div class="col-lg-8 m-auto d-block">
	
	<form action="new.php" method="post" enctype="multipart/form-data">

		<div class="form-group">

			<label for="username">ادخل اسمك</label>
			<input type="text" name="username" id="user" class="form-control">
		</div>

		<div class="form-group">

			<label for="file">age</label>
			<input type="text" name="age" id="age" class="form-control" value="moj">

		</div>

        <div class="form-group">

			<label for="file">اختر صورة</label>
			<input type="file" name="file" id="file" class="form-control" value="moj">

		</div>
       
		   <input type="submit" name="submit" class="btn btn-success" value="نشر">
		
	</form>
 
   </div>
  
</div>

</body>
</html>
