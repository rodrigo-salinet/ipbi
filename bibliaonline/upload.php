<?
require_once('../script_inicio.php');

$nome_arquivo = @$_FILES['arquivo']['name'];

if ($nome_arquivo != '') {
	$arquivo_tmp = @$_FILES['arquivo']['tmp_name'];
	$tipo_arquivo = @$_FILES['arquivo']['type'];
	$tamanho_arquivo = @$_FILES['arquivo']['size'];
	
	$dir_atual_temp = str_replace(basename(__FILE__),'',__FILE__);
	$dir_temp = 'temp';
	$caminho_temp = $dir_atual_temp . $dir_temp;
	$nome_ext_arquivo = explode('.',$nome_arquivo);
	$arq_nome = $nome_ext_arquivo[0];
	$arq_extensao = $nome_ext_arquivo[count($nome_ext_arquivo) - 1];
	$nome_arquivo = '[' . $arq_nome . ']' . date('[d.m.Y][H.i.s]') . '.' . $arq_extensao;
	
	unset($nome_ext_arquivo[count($nome_ext_arquivo) - 1]);
	if (is_file($caminho_temp . chr(92) . $nome_arquivo)) {
		if (count($nome_ext_arquivo) > 0) {
			$arq_nome .= '_' . strval(rand(1,999999));
			$nome_arquivo = $arq_nome . '.' . $arq_extensao;
		} else {
			$nome_arquivo .= '_' . strval(rand(1,999999));
		}
	}
	if (!is_dir($caminho_temp)) {
		if (!mkdir($caminho_temp,0777)) {
			echo 'O diretório ' . $dir_temp . ' não pode ser criado em ' . $dir_atual_temp . '.';
		}
	}
	if (move_uploaded_file($arquivo_tmp,$caminho_temp . chr(92) . $nome_arquivo)) {
		header('Location: arquivos_livros.php?msg=' . urlencode('O arquivo ' . $nome_arquivo . ' foi enviado com sucesso!!!'));
	} else {
		echo 'O arquivo [<B>' . $nome_arquivo . '</B>] não pode ser enviado para o diretório [<B>' . $caminho_temp . '</B>].';
	}
}

require_once('../script_fim.php');
?>