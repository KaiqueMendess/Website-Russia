<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('127.0.0.1','root','');
$db = mysqli_select_db($connect, 'bdprojetorussia');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($senha == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo senha deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else {
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='../index.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='../cadastro.html'</script>";
        }
      }
    }
?>