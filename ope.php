<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$cx = $mysqli_connection = new MySQLi('127.0.0.1', 'root', '');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}


//selecionando o banco de dados 
$db = mysqli_select_db($cx, "netflixdb");

// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios
$result = mysqli_query($cx,"SELECT * FROM `USUARIOS`
WHERE `LOGIN` = '$login' AND `SENHA`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:../home.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  echo"<script language='javascript' type='text/javascript'>
  alert('Login e/ou senha incorretos');window.location
  .href='../index.html';</script>";
  die();

  }
?>