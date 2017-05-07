<?php 
	include 'head_common.php';
?>
<?php
	use X\Sys\Session;
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<body>
        <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="/stp/dashboard"><?= $this->page; ?></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="/stp/dashboard">Home</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="/stp/editstory">Story</a></li>
		          <li><a href="/stp/edituser">Users</a></li>
		        </ul>
		      </li>

		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/stp/login/logout"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		    </ul>
		  </div>
		</nav>

		
		<section>

		<h1>Perfil</h1>
			

            <form method="POST" action="/stp/editprofile/editar">
				<label>Nombre: </label><input type="text" name="name" value="<?= $this->dataTable[0]['usersname'] ?>" class="inp_text">
				<label>Email: </label><input type="text" name="email" value="<?= $this->dataTable[0]['email'] ?>" class="inp_text"><br>
				<label>Password: </label><input type="password" name="password" value="<?= $this->dataTable[0]['password'] ?>" class="inp_text">
				<input type="submit" name="username" id="username" class="btn btn-success" value="modificar">
            </form>
            <div class="msg"></div>
        </section>


<?php 
	include 'footer_common.php';
?>