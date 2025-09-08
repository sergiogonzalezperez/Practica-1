<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>PHP Práctica # 1 SGP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- Enlaces a bootstrap   -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<header>
  <h1>Programación de Aplicaciones Web 2025</h1>
  <p>Creado por Sergio González Pérez</p>
  <h1><p>Códigos de Práctica # 1 </p></h1>
<h1><p>Introducción a la Programación de Aplicaciones Web </p></h1>
</header>
<body>
    <?php session_start();
   if ($_SERVER["REQUEST_METHOD"] !=="POST"){
    unset($_SESSION["mostrar_res1"]); 
    unset($_SESSION["mostrar_res2"]);
    unset($_SESSION["mostrar_res3"]);
   }
?>
<FORM ACTION="mainconsesiones.php" METHOD="POST">
<INPUT TYPE="submit" id="my_inpu1" NAME="btnapp1" VALUE="Aplicación Web 1">
<INPUT TYPE="submit" id="my_inpu2" NAME="btnapp2" VALUE="Aplicación Web 2">
<INPUT TYPE="submit" id="my_inpu3" NAME="btnapp3" VALUE="Aplicación Web 3">
</FORM>
     <div>  
     <div id="res1">
            <?php if (isset($_POST["btnapp1"])){
                $_SESSION['mostrar_res1']=true;
                $_SESSION['res1']='AppWeb1.php';
            }
            if (isset($_SESSION['mostrar_res1'])){
                include $_SESSION['res1'];
            }
            ?>
        </div>
        <div id="res2">
        <?php if (isset($_POST["btnapp2"])){
                $_SESSION['mostrar_res2']=true;
                $_SESSION['res2']='AppWeb2.php';
            }
            if (isset($_SESSION['mostrar_res2'])){
                include $_SESSION['res2'];
            }
            ?>
        </div>
        <div id="res3">
        <?php if (isset($_POST["btnapp3"])){
                $_SESSION['mostrar_res3']=true;
                $_SESSION['res3']='AppWeb3.php';
            }
            if (isset($_SESSION['mostrar_res3'])){
                include $_SESSION['res3'];
            }
            ?>
        </div>

     </div>
</body>
<footer>
    <h3>Fecha de Elaboración:</h3>
    <h3>08/septiembre/2025</h3>
    <h3>Ing. Sergio González Pérez</h3>
  
</footer>
</html>