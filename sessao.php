<?
$sql_pessoas = "SELECT * FROM PESSOAS WHERE USUARIO='" . $_SESSION['usuario'] . "' AND SENHA='" . $_SESSION['senha'] . "'";
$pessoas = mysql_query($sql_pessoas,$conexao);
echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
if (@mysql_num_rows($pessoas) == 0) {
	@session_destroy();
	header('Location: adm.php?msg=' . urlencode('Sessão Finalizada. Usuário ou Senha Inválidos.'));
}
?>
