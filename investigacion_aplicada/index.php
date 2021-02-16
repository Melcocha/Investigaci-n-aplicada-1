<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Investigacion Aplicada 1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-image: url(&quot;assets/img/fondo-codigo-binario-azul-brillante-abstracto-simbolos-programacion-aleatorios-movimiento-informacion-digital-concepto-alta-tecnologia-diseno-programacion-efecto-luz_185386-586.jpg&quot;);">
            <div class="container"><img style="height: 79px;margin: 19px;width: 81px;padding: -36px;font-size: 37px;" src="assets/img/73835fa38fba6d35aff9de603dc5044a-icono-de-lenguaje-de-programaci-oacute-n-php-by-vexels.png"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Expresiones regulares en PHP</a><button data-toggle="collapse" class="navbar-toggler"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1"></div>
            </div>
        </nav>
    </header> 
   

<?php

function regexCheck($variable,$case)
{

	//Selector de la regex (expresión regular)
	switch ($case)
	{
		case "email":
			$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		break;

		case "ipAddress":
			$regex = "/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";
		break;

		case "userName":
			$regex = "/^[a-z\d_]{4,15}$/i";
		break;
	}

	if(preg_match($regex,$variable))
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
 
}

if(@$_POST['emailForm'])
{
	if(regexCheck($_POST['emailForm'],"email")){
		$resultadoEmail = "Formato correcto para: E-mail";
	}
	else
	{
		$resultadoEmail = "Formato incorrecto para: E-mail";
	}
}
 
if(@$_POST['IPForm'])
{
	if(regexCheck($_POST['IPForm'],"ipAddress")){
		$resultadoIP = "Formato correcto para: IP";
	}
	else
	{
		$resultadoIP = "Formato incorrecto para: IP";
	}
}
 
if(@$_POST['UserNameForm'])
{
	if(regexCheck($_POST['UserNameForm'],"userName")){
		$resultadoUN = "Formato correcto para: Usuario";
	}
	else
	{
		$resultadoUN = "Formato incorrecto para: Usuario";
	}
}

?>


    

    </div>
	<div class="container jumbotron">
		</form>
		<section class="form-register">
   <h4>Formulario de Registro </h4>
   <h3>Validaciones de usuario:</h3>

   <form action="" method="post">
     Usuario: 
         <input  class= "constrols" type="text" name="UserNameForm"> <br> <br>
         <input  class="botons" type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoUN; ?></strong>
 
   <h3>Validaciones de e-mail:</h3>
   <form action="" method="post">
      E-mail: 
         <input class= "constrols" type="text" name="emailForm"> <br> <br>
         <input class="botons" type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoEmail; ?></strong>
 
   <h3>Validaciones de Dirección IP:</h3>
   <form action="" method="post">
      IP: 
         <input class= "constrols"  type="text" name="IPForm"> <br> <br>
         <input class="botons"   type="submit" value="Comprobar">
   </form>
   <strong><?php echo @$resultadoIP; ?></strong>
 
   
 
   </body> 
</html>