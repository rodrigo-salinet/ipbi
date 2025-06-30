<? require_once('../script_inicio.php'); ?>
<FORM ACTION="importa_livro.php" METHOD="POST" NAME="frm_arquivo">
<TABLE ALIGN="CENTER">
<? if (trim(@$_GET['msg']) != '') { ?>
	<TR>
		<TD><H3><?=$msg;?></H3></TD>
	</TR>
<? } ?>
	<TR>
		<TD>
			<DIV STYLE="height: 300px; overflow: auto;">
				<TABLE>
					<TR>
						<TD STYLE="border: 1px dashed #CCCCCC;">Selecione o Arquivo:</TD>
						<TD STYLE="border: 1px dashed #CCCCCC;">Selecione o Livro:</TD>
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
<?
$sql_livros = "SELECT * FROM LIVROS ORDER BY NOME ASC;";
$livros = mysql_query($sql_livros,$conexao);
for ($n = 0; $n < @mysql_num_rows($livros); $n++) {
?>
								<TR>
									<TD><INPUT TYPE="RADIO" NAME="rdg_livro" ID="rdg_livro" VALUE="<?=@mysql_result($livros,$n,'ID');?>"></TD>
									<TD><?=@mysql_result($livros,$n,'NOME');?></TD>
								</TR>
<? } ?>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="CENTER"><IMG SRC="../imagens/caderneta.gif" TITLE="Editar Arquivo"> <IMG SRC="../imagens/janela_lupa.gif" TITLE="Visualizar Arquivo"> <IMG SRC="../imagens/x.gif" TITLE="Excluir Arquivo"></TD>
						<TD>&nbsp;</TD>
					</TR>
				</TABLE>
			</DIV>
		</TD>
	<TR>
		<TD ALIGN="CENTER">
			<INPUT TYPE="SUBMIT" VALUE="Atualizar"><INPUT TYPE="RESET" VALUE="Cancelar">
		</TD>
	</TR>
</TABLE>
</FORM>
<? require_once('../script_fim.php'); ?>