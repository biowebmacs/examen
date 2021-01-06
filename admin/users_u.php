<?php include('superior.php'); ?>
<?php include('menu.php'); ?>

<div class="container">
 <div class="row">
    <div class="col-md-9">
	    <?php
			$id=$_GET['id']; 
			$post = getUser($id);
		?>
	   <br>
	  <div class="card card-body">
		<form method="POST" action="users_a.php?ac=2">
		   <div class="form-group">
		      <label for="id"> <strong>id </strong></label>
			  <p><input type="text" name="id" class="form-control" value="<?php echo $post['id']; ?>" readonly="readonly"></p>
			  <label for="username"> <strong>username </strong></label>
			  <p><input type="text" name="username" class="form-control" value="<?php echo $post['username']; ?>"></p>
			  <label for="password"> <strong>password</strong></label>
			  <p><input type="text" name="password" class="form-control" value="<?php echo $post['password']; ?>"></p>
		
              <label for="email"> <strong>email </strong></label>
              <p><input type="text" name="email" class="form-control"  value="<?php echo $post['email']; ?>"></p>
              
			  <input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Actualizar">
			</div>
		</form>
	  </div>
	  <br>
	</div >
 </div>
<div>
<?php include('footer.php'); ?>
