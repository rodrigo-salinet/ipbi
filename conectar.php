<?
@session_start();
$txt_usuario = trim($_POST['txt_usuario']);
$txt_senha = trim($_POST['txt_senha']);
$_SESSION['usuario'] = $txt_usuario;
$_SESSION['senha'] = md5($txt_senha);
//phpinfo(); echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
header('Location: index.php');
?>
