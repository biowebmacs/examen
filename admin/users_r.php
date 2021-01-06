<?php include('superior.php'); ?>
<?php include('menu.php'); ?>
<div class="conteiner">
  <div class="row">
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>user_id</th>
                <th>username</th>
                <th>password</th>
                <th>useremail</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "preguntas");
                  $consulta = "SELECT * FROM users ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['id']?> </td>
                                <td> <?php echo $row['username']?> </td>
                                <td> <?php echo $row['password']?> </td>
                                <td> <?php echo $row['email']?> </td>

                                <td> 
                                  <a href="users_u.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i>
                                  </a>
                                  
                                  <a href="users_a.php?id=<?php echo $row['id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
	 </div>
</div>