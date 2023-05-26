<?php include 'php/update.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Idenitas Pegawai</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div class="container">

			<form action="php/update.php" method="post">
			<h4 class="display-6 text-center"> Edit Identitas Pegawai</h4><hr><br>
			<?php if(isset($_GET['error'])) {?>
			<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']?>
			</div>
		<?php } ?>
			<div class="form-group">
		    <label for="name">NAMA</label>
		    <input type="name" class="form-control" id="name" name = "name" value = "<?=$row['name'] ?>">
		  	</div>

		  <div class="form-group">
		    <label for="email">EMAIL</label>
		    <input type="email" class="form-control" id="email" name= "email" value = "<?=$row['email'] ?>">
		  </div>
		  <input type="text" name="id" value="<?=$row['id']?>" hidden >

  		<button type="submit" class="btn btn-primary" name= "edit">Edit</button>
  		<a href="read.php" class="link-primary">Lihat</a>
  		</form>
		</div>			
</body>
</html>