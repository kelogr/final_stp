<?php 
	include 'head_common.php';
?>
<body>
        <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/stp/dashboard"><?= $this->page; ?></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="/stp/editstory">Story</a></li>
		          <li><a href="/stp/edituser">Users</a></li>
		          <li><a href="/stp/editprofile">Profile</a></li>
		        </ul>
		      </li>
		      <li><a href="/stp/profile">Profile</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/stp/login/logout"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		    </ul>
		  </div>
		</nav>

		
		<section>

		<h1>Todos los usuarios</h1>
			<table class="table table-hover">
			<thead><th>Id Usuario</th><th>Rol</th><th>Email</th><th>Password</th><th>Username</th></thead>
              
              <form action="/stp/edituser/editar" method="POST">
              <?php for($i=0;$i<count($this->dataTable);$i++){ ?>
                
                <tr>
                <?php $cont=0; $cont2=0; $ids=['iduser', 'rol', 'email', 'password', 'username'];?>
                <?php foreach($this->dataTable[$i] as $key=>$value) :?>
                  	<?php if($cont==0){$id=$value;$cont++;} ?>
                  	
                        <td><input type="text" id="<?=$ids[$cont2];?>" name="<?=$ids[$cont2];?>" value="<?= $value; ?>"></input></td>
                  	<?php $cont2++ ?>
                  <?php endforeach; ?>
                  
                  <td>
                  <button type="button" class="btn edi-user btn-success" value="editar" id="<?= $id; ?>" name="editar" >Editar</button>
                  </td>
                  </form>
                  <form action="/stp/edituser/eliminar" method="POST">
                  <td>
                  	<button type="submit" class="btn btn-danger elm-user" value="<?= $id; ?>" id="<?= $id; ?>" name="eliminar">Eliminar</button>
                  </td>
                  </form>
                  </tr>
                <?php } ?>
            </table>

            <span class="msg"></span>
        </section>


<?php 
	include 'footer_common.php';
?>