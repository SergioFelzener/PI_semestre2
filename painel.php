<?php
//capturando session armazenada =)
if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}
// estando para obter resultado de session desativado
// print_r($_SESSION);exit;
include ('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>