<? require_once('script_inicio.php'); ?>
<H2 ALIGN="CENTER">Formulário de Cadastro.</H2> 
<FORM ACTION="frm_cadastrar.php" ENCTYPE="multipart/form-data" ID="frm_cadastro" METHOD="POST" NAME="frm_cadastro"> 
	<TABLE ALIGN="CENTER" WIDTH="1%" STYLE="border: 2px dashed #CCCCCC;"> 
		<TR> 
			<TD COLSPAN="4" ALIGN="CENTER" VALIGN="MIDDLE" NOWRAP> 
				<H3>Informa&ccedil;&otilde;es Sobre o C&ocirc;njuje </H3> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Nome Completo: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Sexo:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="rdg_" TYPE="radio" VALUE="M"> 
				Masculino
				<INPUT NAME="rdg_" TYPE="radio" VALUE="F"> 
				Feminino </TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Data de Nascimento:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				/
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="4" MAXLENGTH="4"> 
			</TD> 
			<TD CLASS="esq">Profiss&atilde;o:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Nacionalidade:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">E-Mail:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">MSN, Yahoo...:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">Site, Blog...:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Endere&ccedil;o Profissional: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">N&uacute;mero:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="6" MAXLENGTH="6"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Bairro:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Munic&iacute;pio:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">CEP:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="10" MAXLENGTH="10"> 
			</TD> 
			<TD CLASS="esq">UF:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Fone:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				-
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="5" MAXLENGTH="5"> 
			</TD> 
			<TD CLASS="esq">Celular:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				-
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="5" MAXLENGTH="5"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Membro:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Data do Batismo: </TD> 
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
