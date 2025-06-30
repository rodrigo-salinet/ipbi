<? require_once('script_inicio.php'); ?>
<H2 ALIGN="CENTER">Formulário de Cadastro.</H2> 
<FORM ACTION="frm_cadastrar.php" ENCTYPE="multipart/form-data" ID="frm_cadastro" METHOD="POST" NAME="frm_cadastro"> 
	<TABLE ALIGN="CENTER" WIDTH="1%" STYLE="border: 2px dashed #CCCCCC;"> 
		<TR ALIGN="CENTER"> 
			<TD COLSPAN="4" VALIGN="MIDDLE" NOWRAP> 
				<H3>Informa&ccedil;&otilde;es Sobre Filhos(as)</H3> 
			</TD> 
		</TR> 
		<TR ALIGN="CENTER"> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Nome Completo:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Sexo:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="rdg_" TYPE="radio" VALUE="M"> 
				Masculino
				<INPUT NAME="rdg_" TYPE="radio" VALUE="F"> 
				Feminino</TD> 
		</TR> 
		<TR ALIGN="CENTER"> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Data de Nascimento:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="4" MAXLENGTH="4"> 
			</TD> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Membro:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
		</TR> 
		<TR ALIGN="CENTER"> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Data do Batismo: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="4" MAXLENGTH="4"> 
			</TD> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Data da Profiss&atilde;o de F&eacute;: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="4" MAXLENGTH="4"> 
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<? require_once('script_fim.php'); ?> 
