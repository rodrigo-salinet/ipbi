<?
require_once('../script_inicio.php');

$rdg_arquivo = @$_POST['rdg_arquivo'];
$rdg_livro = @$_POST['rdg_livro'];

$sql_livros = "SELECT * FROM LIVROS WHERE ID=$rdg_livro";
$livros = mysql_query($sql_livros,$conexao);
if (@mysql_num_rows($livros) == 0) {
	header('Location: arquivos_livros.php?msg=' . urlencode('Livro não encontrado.'));
}

$sql_biblia = "SELECT * FROM BIBLIA WHERE ID_LIVRO=$rdg_livro";
$biblia = mysql_query($sql_biblia,$conexao);
if (@mysql_num_rows($biblia) > 0) {
	header('Location: arquivos_livros.php?msg=' . urlencode('O Livro selecionado já foi atualizado.'));
}
//exit($sql_biblia);

$id_livro = mysql_result($livros,0,'ID');

$dir_temp = 'temp';
$caminho_atual = str_replace(basename(__FILE__),'',__FILE__);

$linhas = file($caminho_atual . $dir_temp . chr(92) . $rdg_arquivo);

for ($n = 0; $n < count($linhas); $n++) {
	if ($linhas[$n]{0} == '»') {
		$capitulo = '';
		$achou = false;
		for ($i = 0; $i < strlen($linhas[$n]); $i++) {
			if ($linhas[$n]{$i} == '[') {	
				for ($j = ($i + 1) ; $j < strlen($linhas[$n]); $j++) {
					if ($linhas[$n]{$j} == ']') {
						break;
					}
					$capitulo .= $linhas[$n]{$j};
				}
			}
		}
		//echo 'Capítulo: ' . $capitulo . '<BR>Versículos:<BR>';
	} else {
		$chr_inicial = '';
		$versiculo = '';
		for ($i = 0; $i < strlen($linhas[$n]); $i++) {
			if (trim($linhas[$n]{$i}) == '') {
				$chr_inicial = ($i + 1);
				break;
			}
			$versiculo .= '' . $linhas[$n]{$i};
		}
		$texto = substr($linhas[$n],$chr_inicial,(strlen($linhas[$n]) - 1));
		$sql_inserir = "INSERT INTO BIBLIA (ID_IDIOMA,ID_LIVRO,CAPITULO,VERSICULO,TEXTO) VALUES (1,$id_livro,$capitulo,$versiculo,'$texto')";
		mysql_query($sql_inserir,$conexao);
		//echo $versiculo . '<BR>';
	}
}
header('Location: arquivos_livros.php?msg=' . urlencode('LIVRO DE ' . @mysql_result($livros,0,'NOME') . ' ATUALIZADO COM SUCESSO.'));
?>
<? require_once('../script_fim.php'); ?>
