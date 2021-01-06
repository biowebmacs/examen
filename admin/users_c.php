<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="col-md-9">
  <div class="row">

    <div class="col-md-9" >
			<div class="card card-body">
				<form method="POST" action="users_a.php?ac=1">
					<div class="form-group">
						<label for="id"> <strong>id </strong></label>
						<p><input type="text" name="id" class="form-control" ></p>
						<label for="username"> <strong>username</strong></label>
						<p><input type="text" name="username" class="form-control" ></p>
						<label for="password"> <strong>password </strong></label>
						<p><input type="password" name="password" class="form-control" ></p>
                        <label for="email"> <strong>email </strong></label>
						<p><input type="email" name="email" class="form-control" ></p>
           
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>
<?php include('footer.php'); ?>