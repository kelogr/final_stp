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
		      <a class="navbar-brand" href="/stp/dashboard"><?= Session::get('users')['usersname'] ?></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="/stp/dashboard">Home</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="/stp/addstory">Story</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Edit<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="/stp/editstory">Story</a></li>
		          <li><a href="/stp/edituser">Users</a></li>
		        </ul>
		      </li>
		      <li><a href="/stp/profile">Profile</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/stp/login/logout"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		    </ul>
		  </div>
		</nav>

		
		<section style="width: 70%; margin: auto; display: flex; flex-direction: column; justify-content: center;">

			
			<h2><?= $this->dataTable[0]['titulo'] ?></h2>
			
			<textarea cols="10" style="height: 500px;"><?= $this->dataTable[0]['sinopsis'] ?></textarea>
			<form method="POST" action="/stp/story/valorar">
			<lable>Valoracion media: </label><input type="text" value="<?= $this->dataTable[0]['medium_values'] ?>" DISABLED>
			<label>   Tu valoración:  </label><input type="number" name="valoracion" id="valoracion">
			<input type="submit" name="enviar" value="Valorar">
			<input type="number" name="historia" id="historia" value="<?= $this->dataTable[0]['idstories'] ?>" style="visibility:hidden">
			</form>
			<div class="msg"></div>
        </section>


<?php 
	include 'footer_common.php';
?>