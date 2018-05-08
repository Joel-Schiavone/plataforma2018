<!DOCTYPE html>
<html>
<?php
		include_once('head.php');
?>
	 <!-- Custom styles for this template -->
    <link href="cssEspecificos/signin.css" rel="stylesheet">	

</head>    
<body>

	  <form class="form-signin">
      <img class="mb-4" src="media/logos/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Por favor, registrese</h1>
      <label for="email" class="sr-only">Dirección de correo electrónico</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Dirección de correo electrónico" required autofocus>
      <label for="password" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuérdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
	
	
<?php
		include_once('footer.php');
?>	
</body>
</html>