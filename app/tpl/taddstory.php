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

		<h1>Añadir</h1>
			
			<form method="POST" action="/stp/addstory/add">
			<label>Titulo</label>
			<input type="text" name="titulo" id="titulo">
			<label>Historia</label>
			<div class="ewrapper">
			  <div class="toolbar">
			    
			    <div class="block">
			      <a id="boldbtn" class="editor-btn">bold</a>
			      <a id="italicbtn" class="editor-btn">italic</a>
			      
			      <a id="colorbtn" class="editor-btn">color</a>
			      <span style="display:none" id="colorBtns">
			        <a class="color-btn" style="background-color: rgb(255,0,0)" data-value="rgb(255,0,0)">R</a>
			        <a class="color-btn" style="background-color: rgb(0,255,0)" data-value="rgb(0,255,0)">G</a>
			        <a class="color-btn" style="background-color: rgb(0,0,255)" data-value="rgb(0,0,255)">B</a>
			      </span>
			      
			      <a id="bgcolorbtn" class="editor-btn">BG color</a>
			      <span style="display:none" id="bgColorBtns">
			        <a class="bg-color-btn" style="background-color: rgb(255,128,128)" data-value="rgb(255,128,128)">R</a>
			        <a class="bg-color-btn" style="background-color: rgb(128,255,128)" data-value="rgb(128,255,128)">G</a>
			        <a class="bg-color-btn" style="background-color: rgb(128,128,255)" data-value="rgb(128,128,255)">B</a>
			      </span>
			      
			      &nbsp;
			      <a id="fontSizeSmaller" class="editor-btn">-</a>
			      <input type="text" style="width: 30px; border: none; text-align: right;" id="fontSize"/>
			      <a id="fontSizeRemove" class="editor-btn">x</a>
			      <a id="fontSizeBigger" class="editor-btn">+</a>
			      &nbsp;
			      
			      <span style="display:none" id="tableBtns">
			        &nbsp;
			        <a id="addRowAbove" class="editor-btn">+⋀</a>
			        <a id="addRowBelow" class="editor-btn">+⋁</a>
			        <a id="addRowBefore" class="editor-btn">+&lt;</a>
			        <a id="addRowAfter" class="editor-btn">+&gt;</a>
			        
			        &nbsp;
			        <a id="removeRow" class="editor-btn">-=</a>
			        <a id="removeCol" class="editor-btn">-||</a>
			        
			        &nbsp;
			        <a id="merge" class="editor-btn">[&nbsp;]</a>
			      </span>

			      <a id="leftbtn" class="editor-btn">Left</a>
			      <a id="centerbtn" class="editor-btn">Center</a>
			      <a id="rightbtn" class="editor-btn">Right</a>
			      
			    </div>
			  </div><!-- toolbar -->
			<textarea id="texto" name="texto"></textarea>

			<input type="submit" name="newstory" id="newstory" class="btn btn-primary">
			</form>
            <span class="msg"></span>
        </section>


<?php 
	include 'footer_common.php';
?>