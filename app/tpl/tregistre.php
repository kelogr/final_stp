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
              <li><a href="login">Iniciar Sesión</a></li>
            </ul>
          </div>
        </nav>
            
            <h1>Registre</h1>

        <form method="POST" class="formulario-login" action="/stp/registre/reg">
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname"  name="usrname" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="passwd">Contraseña:</label>
              <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <div class="msg"></div>
          </form>

          
	
<?php 
	include 'footer_common.php';
        
?>
