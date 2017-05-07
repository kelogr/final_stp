<?php 
	include 'head_common.php';
?>
<body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/stp/">Home</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="registre">Registre</a></li>
            </ul>
          </div>
        </nav>
            
            <h1>LOG IN</h1>

        <form method="POST" class="formulario-login" action="/stp/login/log">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="passwd">Contraseña:</label>
              <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default">Iniciar Sesión</button>
            <div class="msg"></div>
        </form>
	
<?php 
	include 'footer_common.php';
        
?>
