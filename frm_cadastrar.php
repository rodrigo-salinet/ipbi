<? require_once('script_inicio.php'); ?>
<?
$txt_nome = $_POST['txt_nome'];
$txt_dia_nasc = $_POST['txt_dia_nasc'];
$txt_mes_nasc = $_POST['txt_mes_nasc'];
$txt_ano_nasc = $_POST['txt_ano_nasc'];
$txt_pai = $_POST['txt_pai'];
$txt_mae = $_POST['txt_mae'];
$txt_nacionalidade = $_POST['txt_nacionalidade'];
$txt_endereco = $_POST['txt_endereco'];
$txt_bairro = $_POST['txt_bairro'];
$txt_cep = $_POST['txt_cep'];
$txt_pais = $_POST['txt_pais'];
$txt_dddc = $_POST['txt_dddc'];
$txt_celular = $_POST['txt_celular'];
$txt_msn = $_POST['txt_msn'];
$txt_formacao = $_POST['txt_formacao'];
$txt_especializacao = $_POST['txt_especializacao'];
$rdg_sexo = $_POST['rdg_sexo'];
$txt_profissao = $_POST['txt_profissao'];
$rdg_paimembro = $_POST['rdg_paimembro'];
$rdg_maemembro = $_POST['rdg_maemembro'];
$sel_estadocivil = $_POST['sel_estadocivil'];
$txt_numero = $_POST['txt_numero'];
$txt_municipio = $_POST['txt_municipio'];
$txt_uf = $_POST['txt_uf'];
$txt_dddf = $_POST['txt_dddf'];
$txt_fone = $_POST['txt_fone'];
$txt_email = $_POST['txt_email'];
$txt_site = $_POST['txt_site'];
$txt_curso = $_POST['txt_curso'];
$txt_anoform = $_POST['txt_anoform'];
$txt_dia_batismo = $_POST['txt_dia_batismo'];
$txt_mes_batismo = $_POST['txt_mes_batismo'];
$txt_ano_batismo = $_POST['txt_ano_batismo'];
$sel_ministerio = $_POST['sel_ministerio'];
$txt_dia_visita = $_POST['txt_dia_visita'];
$txt_mes_visita = $_POST['txt_mes_visita'];
$txt_ano_visita = $_POST['txt_ano_visita'];
$rdg_visitar = $_POST['rdg_visitar'];
$txt_obs = $_POST['txt_obs'];
$txt_usuario = $_POST['txt_usuario'];
$txt_senha = $_POST['txt_senha'];
$txt_dia_pfe = $_POST['txt_dia_pfe'];
$txt_mes_pfe = $_POST['txt_mes_pfe'];
$txt_ano_pfe = $_POST['txt_ano_pfe'];
$rdg_freq = $_POST['rdg_freq'];
$sel_sociedade = $_POST['sel_sociedade'];
$txt_local_visita = $_POST['txt_local_visita'];
$rdg_membro = $_POST['rdg_membro'];
$txt_oracao = $_POST['txt_oracao'];

$sql_inserir = "INSERT INTO PESSOAS (
			NOME,
			SEXO,
			DATA_NASCIMENTO,
			PROFISSAO,
			NOME_PAI,
			PAI_MEMBRO,
			NOME_MAE,
			MAE_MEMBRO,
			NACIONALIDADE,
			ESTADO_CIVIL,
			ENDERECO,
			NUMERO,
			BAIRRO,
			MUNICIPIO,
			CEP,
			UF,
			PAIS,
			DDD_FONE,
			FONE,
			DDD_CELULAR,
			CELULAR,
			EMAIL,
			MSN,
			SITE,
			FORMACAO_ACADEMICA,
			CURSO,
			ESPECIALIZACAO,
			ANO_FORMACAO,
			DATA_BATISMO,
			DATA_PROF_FE,
			MINISTERIO,
			FREQUENCIA,
			RECEBER_VISITA,
			OBS,
			SOCIEDADE,
			VISITA,
			MEMBRO,
			ORAR,
			USUARIO,
			SENHA

			)VALUES (

			$txt_nome,
			$rdg_sexo,
			$txt_dia_nasc . '/' . $txt_mes_nasc . '/' . $txt_ano_nasc,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			$,
			)";

header('Location: frm_cadastro.php?msg=' . urlencode('Usuário cadastrado com sucesso.'));
?>
<? require_once('script_fim.php'); ?> 
