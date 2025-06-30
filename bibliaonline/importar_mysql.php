<? require_once('../script_inicio.php'); ?>
<CENTER>
<H2>Escolha o Arquivo.</H2>
<FORM ACTION="upload.php" METHOD="POST" ENCTYPE="MULTIPART/FORM-DATA" NAME="frm_arquivo" TARGET="acao">
<TABLE ALIGN="CENTER">
	<TR>
		<TD>Arquivo:</TD>
		<TD><INPUT TYPE="FILE" NAME="arquivo" ID="arquivo"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2">&nbsp;</TD>
	</TR>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER">
			<INPUT TYPE="SUBMIT" VALUE="Enviar">
			<INPUT TYPE="RESET" VALUE="Cancelar">
		</TD>
	</TR>
</TABLE>
</FORM>
</CENTER>
<IFRAME SRC="arquivos_livros.php" NAME="acao" ID="acao" WIDTH="100%" MARGINWIDTH="0" HEIGHT="400" MARGINHEIGHT="0" ALIGN="middle" SCROLLING="auto" FRAMEBORDER="0" HSPACE="0" VSPACE="0" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME>
<? require_once('../script_fim.php'); ?>