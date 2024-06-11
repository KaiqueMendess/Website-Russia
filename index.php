<?php
error_reporting(0);
ini_set("display_errors", 0 );
  $login_session = $_SESSION;
    if(isset($login_session)){
      echo"Bem-Vindo, $login_session <br>";
      echo"Essas informações <font color='red'>PODEM</font>ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='../index.html'>Faça Login</a> Para ler o conteúdo";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />

    <!--responsividade-->
    <link rel="stylesheet" href="style/responsive.css">

    <!--owl css-->
    <link rel="stylesheet" href="style/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="style/owl/owl.theme.default.min.css">

    <title>NETFLIX</title>
</head>
<body>

 
</body>
</html>