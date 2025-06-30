<?
require_once('../script_inicio.php');

$rdg_arquivo = @$_POST['rdg_arquivo'];
$rdg_tabela = @$_POST['rdg_tabela'];

$dir_temp = 'temp';
$caminho_atual = str_replace(basename(__FILE__),'',__FILE__);

$arquivo = fopen($caminho_atual . $dir_temp . chr(92) . $rdg_arquivo,'r');
//readfile($caminho_atual . $dir_temp . chr(92) . $rdg_arquivo);
$linhas = file($caminho_atual . $dir_temp . chr(92) . $rdg_arquivo);

for ($n = 0; $n < count($linhas); $n++) {
	echo $linhas[$n] . "<BR>\n";
}
fclose($arquivo);?>

<? require_once('../script_fim.php'); ?>