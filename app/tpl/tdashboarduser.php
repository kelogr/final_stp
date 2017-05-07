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
		      <a class="navbar-brand" href="/stp/dashboarduser"><?= Session::get('users')['usersname'] ?></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="/stp/dashboarduser">Home</a></li>
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

		<h1>Todas las historias</h1>
			<table class="table table-hover">
			<thead><th>Id historia</th><th>Usuario</th><th>Path</th><th>Titulo</th><th>Sinopsis</th><th>Valor Medio</th></thead>
              <?php for($i=0;$i<count($this->dataTable);$i++){ ?>
                <tr onclick="location.href = '<?= APP_W.'story/get/user/'.$this->dataTable[$i]['users'].'/idstory/'.$this->dataTable[$i]['idstories'];?>'">
                <?php $cont=0; ?>
                <?php foreach($this->dataTable[$i] as $key=>$value) :?>
                  	<?php if($cont==0){$id=$value;$cont++;} ?>
                  	
                        <td><?= $value; ?></td>
                  
                  <?php endforeach; ?>
                  
                  </tr>
                <?php } ?>
                
            </table>

        </section>

<br /></div>

<?php 
	include 'footer_common.php';
?>