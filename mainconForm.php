<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Enlaces a bootstrap   -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<header id="my_header1">
  <h1>Programación Orientada a Objetos con PHP 2024</h1>
  <p>Creado por Sergio González Pérez</p>
</header>
<body id="my_body1">

<FORM ACTION="mainconForm.php" METHOD="POST">
<INPUT TYPE="submit" id="my_inpu1" NAME="btnaw1" VALUE="Aplicación Web 1">
<INPUT TYPE="submit" id="my_inpu2" NAME="btnaw2" VALUE="Aplicación Web 2">
<INPUT TYPE="submit" id="my_inpu3" NAME="btnaw3" VALUE="Aplicación Web 3">
</FORM>

<h1 id="my_h1"><p>Códigos PHP </p></h1>
     <div id="my_div1">  
        <?php if(isset($_POST["btnaw1"]) ) {include 'AppWeb1.php'; }?>
        <?php if(isset($_POST["btnaw2"]) ) {include 'AppWeb2.php'; }?>
        <?php if(isset($_POST["btnaw3"]) ) {include 'AppWeb3.php'; }?>
     </div>
</body>
<footer id="my_footer1">
    <h3 id="my_h3" >Fecha de Elaboración:</h3>
   <!-- <?php {include 'fecha.php';} ?>-->
    <h3>Ing. Sergio González Pérez</h3>
  
</footer>
</html>