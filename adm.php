<? require_once('script_inicio.php'); ?>
<BR>
<FORM ACTION="conectar.php" ID="frm_login" METHOD="POST" NAME="frm_login">
<TABLE ALIGN="CENTER">
<? if (trim(@$_GET['msg']) != '') { ?>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER"><B><?=$_GET['msg'];?></B></TD>
	</TR>
<? } ?>
	<TR>
		<TD>Usuário:</TD>
		<TD><INPUT ID="txt_usuario" NAME="txt_usuario" TYPE="TEXT"></TD>
	</TR>
	<TR>
		<TD>Senha:</TD>
		<TD><INPUT ID="txt_senha" NAME="txt_senha" TYPE="PASSWORD"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER"><INPUT TYPE="SUBMIT" VALUE="Ok"><INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	</TR>
</TABLE>
</FORM>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_usuario').focus();</SCRIPT>
<? require_once('script_fim.php'); ?>