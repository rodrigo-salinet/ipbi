<? require_once('../script_inicio.php'); ?>
<FORM ACTION="importa.php" METHOD="POST" NAME="frm_arquivo">
<TABLE ALIGN="CENTER">
<? if (trim(@$_GET['msg']) != '') { ?>
	<TR>
		<TD COLSPAN="2"><H3><?=$msg;?></H3></TD>
	</TR>
<? } ?>
	<TR>
		<TD STYLE="border: 1px dashed #CCCCCC;">Selecione o Arquivo:</TD>
		<TD STYLE="border: 1px dashed #CCCCCC;">Selecione a Tabela:</TD>
	</TR>
	<TR>
		<TD STYLE="border: 1px dashed #CCCCCC; vertical-align: top;">
			<TABLE>
<?
$dir_temp = 'temp';
$diretorio = opendir($dir_temp);
while (($arquivo = readdir($diretorio)) !== false) {
	if (trim($arquivo) != '.' && trim($arquivo) != '..') {
?>
				<TR>
					<TD><INPUT TYPE="RADIO" NAME="rdg_arquivo" ID="rdg_arquivo" VALUE="<?=@$arquivo;?>"></TD>
					<TD><?=@$arquivo;?></TD>
				</TR>
<?
	}
}
closedir($diretorio);
?>
			</TABLE>
		</TD>
		<TD STYLE="border: 1px dashed #CCCCCC; vertical-align: top;">
			<TABLE>
<? for ($n = 0; $n < @mysql_num_rows($tbl_status); $n++) { ?>
				<TR>
					<TD><INPUT TYPE="RADIO" NAME="rdg_tabela" ID="rdg_tabela" VALUE="<?=@mysql_result($tbl_status,$n,0);?>"></TD>
					<TD><?=@mysql_result($tbl_status,$n,0);?></TD>
				</TR>
<? } ?>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD ALIGN="CENTER"><IMG SRC="../imagens/caderneta.gif" TITLE="Editar Arquivo"> <IMG SRC="../imagens/janela_lupa.gif" TITLE="Visualizar Arquivo"> <IMG SRC="../imagens/x.gif" TITLE="Excluir Arquivo"></TD>
		<TD ALIGN="CENTER"><IMG SRC="../imagens/caderneta.gif" TITLE="Editar Tabela"> <IMG SRC="../imagens/janela_lupa.gif" TITLE="Visualizar Tabela"> <IMG SRC="../imagens/x.gif" TITLE="Excluir Tabela"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER">
			<INPUT TYPE="SUBMIT" VALUE="Atualizar"><INPUT TYPE="RESET" VALUE="Cancelar">
		</TD>
	</TR>
</TABLE>
</FORM>
<? require_once('../script_fim.php'); ?>