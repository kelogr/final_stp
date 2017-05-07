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
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="/stp/login/logout"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		    </ul>
		  </div>
		</nav>

		
		<section>

		<h1>Perfil</h1>

				<p>Nombre: <?= $this->dataTable[0]['usersname'] ?></p>
				<p>Email: <?= $this->dataTable[0]['email'] ?></p>
				<p>Contrasenya: <?= $this->dataTable[0]['password'] ?></p>
            	
            	<a href="<?= APP_W.'editprofile'?>" >Editar Perfil</a>
            	
            	<div id="map"></div>

        </section>

		
    <script>
      function initMap() {
        var myLatLng = {lat: 41.3, lng: 2.0167};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 41.3, lng: 2.0167},
          scrollwheel: false,
          zoom: 12
        });

        //Create a marker and set it's position
        var marker = new google.maps.Marker({
        	map:map,
        	position: myLatLng,
        	title: 'Hola DAW!'
        });

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKV4WgPhEzFpzLfELTbCxSCDj8p_ZrA0s&callback=initMap"
    async defer></script>



<?php 
	include 'footer_common.php';
?>