<? require_once('script_inicio.php'); ?>
<H2 ALIGN="CENTER">Formulário de Cadastro.</H2> 
<FORM ACTION="frm_cadastrar.php" ENCTYPE="multipart/form-data" ID="frm_cadastro" METHOD="POST" NAME="frm_cadastro"> 
	<TABLE ALIGN="CENTER" WIDTH="1%" STYLE="border: 2px dashed #CCCCCC;"> 
		<TR> 
			<TD COLSPAN="4" ALIGN="CENTER" VALIGN="MIDDLE" NOWRAP> 
				<H3>Interesses Gerais</H3> 
			</TD> 
		</TR> 
		<TR>
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Descreva-se:</TD>
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP>
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA>
			</TD>
			<TD ALIGN="RIGHT" NOWRAP>Melhor Frase: </TD>
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP>
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA>
			</TD>
		</TR>
		<TR> 
			<TD ALIGN="RIGHT" VALIGN="MIDDLE" NOWRAP>Apelido:</TD> 
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="10" MAXLENGTH="10"> 
			</TD> 
			<TD ALIGN="RIGHT" NOWRAP>Foto:</TD> 
			<TD ALIGN="LEFT" VALIGN="MIDDLE" NOWRAP> 
				<INPUT NAME="file" TYPE="file" CLASS="txt"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Interesses na Comunidade: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Vis&atilde;o Pol&iacute;tica: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Humor:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Roupa - Estilo Visual: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">V&iacute;cios:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Animais de estima&ccedil;&atilde;o: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Mora com quem:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Cidade Natal: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Melhor(es) Amigo(a)(s):</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">Paix&otilde;es:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Esportes:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">Atividades:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Livro(s):</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">M&uacute;sica(s):</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Programa(s) de TV: </TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">Cinema:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Comida:</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">Tipo F&iacute;sico: </TD> 
			<TD CLASS="dir"> 
				<SELECT NAME="select"> 
					<OPTION VALUE="0">- Selecione -</OPTION> 
					<OPTION VALUE="">-&gt; Magro</OPTION> 
					<OPTION VALUE="">-&gt; Atlético</OPTION> 
					<OPTION VALUE="">-&gt; Esbelto</OPTION> 
					<OPTION VALUE="">-&gt; Robusto</OPTION> 
					<OPTION VALUE="">-&gt; Obeso</OPTION> 
				</SELECT> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Altura:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="4" MAXLENGTH="4"> 
			</TD> 
			<TD CLASS="esq">Cal&ccedil;ado N&ordm;: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="2" MAXLENGTH="2"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Cor dos Olhos: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
			<TD CLASS="esq">Cor dos Cabelos:</TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="txt_" TYPE="TEXT" CLASS="txt" ID="txt_" SIZE="30"> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Tudo de Bom :</TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
			<TD CLASS="esq">O Que N&atilde;o Suporta: </TD> 
			<TD CLASS="dir"> 
				<TEXTAREA NAME="txt_" COLS="30" ROWS="2" CLASS="txt" ID="txt_"></TEXTAREA> 
			</TD> 
		</TR> 
		<TR> 
			<TD CLASS="esq">Apar&ecirc;ncia: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
			<TD CLASS="esq">Amigo(a) Perfeita: </TD> 
			<TD CLASS="dir"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
				<INPUT NAME="chk_" TYPE="CHECKBOX" VALUE="sim"> 
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<? require_once('script_fim.php'); ?> 
