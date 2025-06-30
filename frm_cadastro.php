<? require_once('script_inicio.php'); ?>
<STYLE TYPE="TEXT/CSS">
td {
	white-space: nowrap;
}
table {
	width: 0.1%;
}
</STYLE>
<FORM ACTION="frm_cadastrar.php" ENCTYPE="multipart/form-data" ID="frm_cadastro" METHOD="POST" NAME="frm_cadastro">
	<BR>
	<H1 CLASS="titulo">Formulário de Cadastro.</H1>
	<H2 CLASS="titulo">Informa&ccedil;&otilde;es Pessoais</H2>
	<TABLE STYLE="width: 100%;">
		<TR>
			<TD STYLE="vertical-align: top; width: 50%; border: 2px dashed #CCCCCC;">
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="esq">Nome Completo:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Data de Nascimento:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dia_nasc" TYPE="TEXT" CLASS="txt_menor" ID="txt_dia_nasc" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_mes_nasc" TYPE="TEXT" CLASS="txt_menor" ID="txt_mes_nasc" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_ano_nasc" TYPE="TEXT" CLASS="txt_menor" ID="txt_ano_nasc" SIZE="4" MAXLENGTH="4" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Nome do Pai:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_pai" TYPE="TEXT" CLASS="txt" ID="txt_pai">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Nome da M&atilde;e:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_mae" TYPE="TEXT" CLASS="txt" ID="txt_mae">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Nacionalidade:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_nacionalidade" TYPE="TEXT" CLASS="txt" ID="txt_nacionalidade">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Endere&ccedil;o Residencial:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_endereco" TYPE="TEXT" CLASS="txt" ID="txt_endereco">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Bairro:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_bairro" TYPE="TEXT" CLASS="txt" ID="txt_bairro">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">CEP:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD><INPUT NAME="txt_cep1" TYPE="TEXT" CLASS="txt_menor" ID="txt_cep1" SIZE="5" MAXLENGTH="5" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;"></TD>
									<TD>-</TD>
									<TD><INPUT NAME="txt_cep2" TYPE="TEXT" CLASS="txt_menor" ID="txt_cep2" SIZE="3" MAXLENGTH="3" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;"></TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Pa&iacute;s:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_pais" TYPE="TEXT" CLASS="txt" ID="txt_pais">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Celular:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dddc" TYPE="TEXT" CLASS="txt_menor" ID="txt_dddc" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>-</TD>
									<TD>
										<INPUT NAME="txt_celular" TYPE="TEXT" CLASS="txt_menor" ID="txt_celular" SIZE="9" MAXLENGTH="8" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">MSN:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_msn" TYPE="TEXT" CLASS="txt" ID="txt_msn">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Forma&ccedil;&atilde;o Acad&ecirc;mica:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_formacao" TYPE="TEXT" CLASS="txt" ID="txt_formacao">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Especializa&ccedil;&atilde;o:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_especializacao" TYPE="TEXT" CLASS="txt" ID="txt_especializacao">
						</TD>
					</TR>
				</TABLE>
			</TD>
			<TD STYLE="vertical-align: top; width: 50%; border: 2px dashed #CCCCCC;">
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="esq">Sexo:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_sexo" TYPE="radio" VALUE="M">
									</TD>
									<TD>Masculino</TD>
									<TD>
										<INPUT NAME="rdg_sexo" TYPE="radio" VALUE="F">
									</TD>
									<TD>Feminino</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Profiss&atilde;o:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_profissao" TYPE="TEXT" CLASS="txt" ID="txt_profissao">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Pai &eacute; Membro:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_paimembro" TYPE="radio" VALUE="S">
									</TD>
									<TD>Sim</TD>
									<TD>
										<INPUT NAME="rdg_paimembro" TYPE="radio" VALUE="N">
									</TD>
									<TD>N&atilde;o</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">M&atilde;e &eacute; Membro:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_maemembro" TYPE="radio" VALUE="S">
									</TD>
									<TD>Sim</TD>
									<TD>
										<INPUT NAME="rdg_maemembro" TYPE="radio" VALUE="N">
									</TD>
									<TD>N&atilde;o</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Estado Civil:</TD>
						<TD CLASS="dir">
							<SELECT NAME="sel_estadocivil">
								<OPTION VALUE="0">- Selecione -</OPTION>
								<?
$sql_estado_civil = "SELECT * FROM ESTADO_CIVIL";
$estado_civil = mysql_query($sql_estado_civil,$conexao);
for ($n = 0;$n< @mysql_num_rows($estado_civil);$n++) {
?>
								<OPTION VALUE="<?=@mysql_result($estado_civil,$n,'ID');?>">
								<?=@$marcador . ' ' . @mysql_result($estado_civil,$n,'NOME');?>
								</OPTION>
								<? } ?>
							</SELECT>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">N&uacute;mero:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_numero" TYPE="TEXT" CLASS="txt_menor" ID="txt_numero" SIZE="6" MAXLENGTH="6" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Munic&iacute;pio:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_municipio" TYPE="TEXT" CLASS="txt" ID="txt_municipio">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">UF:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_uf" TYPE="TEXT" CLASS="txt_menor" ID="txt_uf" SIZE="2" MAXLENGTH="2">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Fone:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dddf" TYPE="TEXT" CLASS="txt_menor" ID="txt_dddf" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>-</TD>
									<TD>
										<INPUT NAME="txt_fone" TYPE="TEXT" CLASS="txt_menor" ID="txt_fone" SIZE="9" MAXLENGTH="8" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">E-Mail:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_email" TYPE="TEXT" CLASS="txt" ID="txt_email">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Site, Blog...:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_site" TYPE="TEXT" CLASS="txt" ID="txt_site">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Curso:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_curso" TYPE="TEXT" CLASS="txt" ID="txt_curso">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Ano da Forma&ccedil;&atilde;o:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_anoform" TYPE="TEXT" CLASS="txt_menor" ID="txt_anoform" SIZE="4" MAXLENGTH="4" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
</TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
	</TABLE>
	<H2 CLASS="titulo">Informa&ccedil;&otilde;es Sobre a Igreja</H2>
	<TABLE STYLE="width: 100%;">
		<TR>
			<TD STYLE="vertical-align: top; width: 50%; border: 2px dashed #CCCCCC;">
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="esq">Data do Batismo:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dia_batismo" TYPE="TEXT" CLASS="txt_menor" ID="txt_dia_batismo2" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_mes_batismo" TYPE="TEXT" CLASS="txt_menor" ID="txt_mes_batismo" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_ano_batismo" TYPE="TEXT" CLASS="txt_menor" ID="txt_ano_batismo" SIZE="4" MAXLENGTH="4" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Minist&eacute;rio:</TD>
						<TD CLASS="dir">
							<SELECT NAME="sel_ministerio">
								<OPTION VALUE="0">- Selecione -</OPTION>
								<?
$sql_ministerios = "SELECT * FROM MINISTERIOS";
$ministerios = mysql_query($sql_ministerios,$conexao);
for ($n = 0;$n< @mysql_num_rows($ministerios);$n++) {
?>
								<OPTION VALUE="<?=@mysql_result($ministerios,$n,'ID');?>">
								<?=@$marcador . ' ' . @mysql_result($ministerios,$n,'NOME');?>
								</OPTION>
								<? } ?>
							</SELECT>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Primeira Visita:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dia_visita" TYPE="TEXT" CLASS="txt_menor" ID="txt_dia_visita" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_mes_visita" TYPE="TEXT" CLASS="txt_menor" ID="txt_mes_visita" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_ano_visita" TYPE="TEXT" CLASS="txt_menor" ID="txt_ano_visita" SIZE="4" MAXLENGTH="4" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Deseja Receber Visita:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_visitar" TYPE="radio" VALUE="S">
									</TD>
									<TD>Sim</TD>
									<TD>
										<INPUT NAME="rdg_visitar" TYPE="radio" VALUE="N">
									</TD>
									<TD>Não</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Observa&ccedil;&otilde;es Gerais:</TD>
						<TD CLASS="dir">
							<TEXTAREA NAME="txt_obs" COLS="30" ROWS="2" CLASS="txt" ID="txt_obs"></TEXTAREA>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Usu&aacute;rio:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_usuario" TYPE="TEXT" CLASS="txt_menor" ID="txt_usuario" SIZE="10" MAXLENGTH="10">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Senha:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_senha" TYPE="PASSWORD" CLASS="txt_menor" ID="txt_senha" SIZE="10" MAXLENGTH="10">
						</TD>
					</TR>
				</TABLE>
			</TD>
			<TD STYLE="vertical-align: top; width: 50%; border: 2px dashed #CCCCCC;">
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="esq">Data da Profiss&atilde;o de F&eacute;:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="txt_dia_pfe" TYPE="TEXT" CLASS="txt_menor" ID="txt_dia_pfe" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_mes_pfe" TYPE="TEXT" CLASS="txt_menor" ID="txt_mes_pfe" SIZE="2" MAXLENGTH="2" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
									<TD>/</TD>
									<TD>
										<INPUT NAME="txt_ano_pfe" TYPE="TEXT" CLASS="txt_menor" ID="txt_ano_pfe" SIZE="4" MAXLENGTH="4" onKeyPress="return filtra_teclas();" ONPASTE="event.returnValue = false;">
									</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Frequ&ecirc;ncia:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Di&aacute;ria">
									</TD>
									<TD>Di&aacute;ria</TD>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Semanal">
									</TD>
									<TD>Semanal</TD>
								</TR>
								<TR>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="2 x Semana">
									</TD>
									<TD>2 x Semana</TD>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Mensal">
									</TD>
									<TD>Mensal</TD>
								</TR>
								<TR>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Bimestral">
									</TD>
									<TD>Bimestral</TD>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Trimestral">
									</TD>
									<TD>Trimestral</TD>
								</TR>
								<TR>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Semestral">
									</TD>
									<TD>Semestral</TD>
									<TD>
										<INPUT NAME="rdg_freq" TYPE="radio" VALUE="Anual">
									</TD>
									<TD>Anual</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Sociedade Ativa:</TD>
						<TD CLASS="dir">
							<SELECT NAME="sel_sociedade">
								<OPTION VALUE="0">- Selecione -</OPTION>
								<?
$sql_sociedades = "SELECT * FROM SOCIEDADES";
$sociedades = mysql_query($sql_sociedades,$conexao);
for ($n = 0;$n< @mysql_num_rows($sociedades);$n++) {
?>
								<OPTION VALUE="<?=@mysql_result($sociedades,$n,'ID');?>">
								<?=@$marcador . ' ' . @mysql_result($sociedades,$n,'NOME');?>
								</OPTION>
								<? } ?>
							</SELECT>
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Hor&aacute;rio - Local de Visita:</TD>
						<TD CLASS="dir">
							<INPUT NAME="txt_local_visita" TYPE="TEXT" CLASS="txt" ID="txt_local_visita">
						</TD>
					</TR>
					<TR>
						<TD CLASS="esq">Membro:</TD>
						<TD CLASS="dir">
							<TABLE>
								<TR>
									<TD>
										<INPUT NAME="rdg_membro" TYPE="radio" VALUE="S">
									</TD>
									<TD>Sim</TD>
									<TD>
										<INPUT NAME="rdg_membro" TYPE="radio" VALUE="N">
									</TD>
									<TD>N&atilde;o</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN="2">
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="esq">Motivo(s) de Ora&ccedil;&atilde;o:</TD>
						<TD CLASS="dir">
							<TEXTAREA NAME="txt_oracao" COLS="30" ROWS="2" CLASS="txt" ID="txt_oracao"></TEXTAREA>
						</TD>
					</TR>
				</TABLE>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN="2" ALIGN="CENTER">
				<INPUT TYPE="SUBMIT" VALUE="Cadastrar">
				<INPUT TYPE="RESET" VALUE="Cancelar">
			</TD>
		</TR>
	</TABLE>
</FORM>
<? require_once('script_fim.php'); ?>
