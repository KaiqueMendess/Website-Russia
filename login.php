<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('127.0.0.1','root','');
$db = mysqli_select_db('bdprojetorussia');
  if (isset($entrar)) {

    $verifica = mysqli_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:home.php");
      }
  }
?>