<?php 
	include 'head_common.php';
	?>

<body>
        
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/stp/"><?= $this->page; ?></a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="registre">Registrarse</a></li>
              <li><a href="login">Iniciar Sesión</a></li>
            </ul>
          </div>
        </nav>
        
        <section>
            <h1>StoryPub</h1>
            <p>Leer, compartir y escribir<i class="fa fa-book" aria-hidden="true"></i></p>
        </section>
        
        
<?php 
	include 'footer_common.php';
?>