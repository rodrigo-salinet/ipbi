<? require_once('script_inicio.php'); ?>
<H2 ALIGN="CENTER">Formulário de Cadastro.</H2> 
<FORM ACTION="frm_cadastrar.php" ENCTYPE="multipart/form-data" ID="frm_cadastro" METHOD="POST" NAME="frm_cadastro"> 
	<TABLE ALIGN="CENTER" WIDTH="1%" STYLE="border: 2px dashed #CCCCCC;"> 
		<TR ALIGN="CENTER"> 
			<TD COLSPAN="4" VALIGN="MIDDLE" NOWRAP> 
				<H3>Informa&ccedil;&otilde;es Profissionais</H3> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Ramo de Atividade Profissional: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Cargo:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR>
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Descri&ccedil;&atilde;o do Trabalho:</TD>
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP>
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA>
			</TD>
			<TD ALIGN="RIGHT" NOWRAP>&nbsp;</TD>
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP>&nbsp;</TD>
		</TR>
		<TR> 
			<TD CLASS="esq">Habilidades da Carreira: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Interesses de Carreira:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
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
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
			</TD> 
		</TR> 
		<TR> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Fone:</TD> 
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				- 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="5" MAXLENGTH="5"> 
			</TD> 
			<TD ALIGN="RIGHT" NOWRAP>Celular:</TD> 
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
				-
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="5" MAXLENGTH="5"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Nome da Empresa: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Site:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">E-Mail:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Contato:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD COLSPAN="4" ALIGN="CENTER" VALIGN="MIDDLE" NOWRAP> 
				<HR WIDTH="100%"> 
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<? require_once('script_fim.php'); ?> 
