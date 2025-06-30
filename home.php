<? require_once('script_inicio.php'); ?>
<TABLE WIDTH="100%"> 
	<TR> 
		<TD STYLE="vertical-align: top;">
			<TABLE WIDTH="100%">
				<TR>
					<TD ALIGN="CENTER"><IMG SRC="imagens/banner_02.jpg"></TD> 
				</TR> 
				<TR>
					<TD ALIGN="CENTER"><HR WIDTH="100%"></TD> 
				</TR> 
				<TR> 
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD WIDTH="1%"><IMG SRC="imagens/agradavel1.gif"></TD>
								<TD>
									<TABLE>
										<TR>
											<TD ALIGN="CENTER"><B>Santificai-vos...</B> [Josué 3:5-B]</TD>
										</TR>
										<TR>
											<TD>&nbsp;</TD>
										</TR>
										<TR>
											<TD STYLE="text-align: justify;"><I>"...Santificai-vos, porque amanhã fará o SENHOR maravilhas no meio de vós."</I></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
						</TABLE>
					</TD> 
				</TR> 
				<TR>
					<TD ALIGN="CENTER"><HR WIDTH="100%"></TD> 
				</TR> 
				<TR> 
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD WIDTH="1%"><IMG SRC="imagens/agradavel1.gif"></TD>
								<TD>
									<TABLE>
										<TR>
											<TD ALIGN="CENTER"><B>Uma vida que realmente glorifica a Deus.</B> [I Pe 4:1-11]</TD>
										</TR>
										<TR>
											<TD>&nbsp;</TD>
										</TR>
										<TR>
											<TD STYLE="text-align: justify;"><I>Cremos na possibilidade de uma vida agradável perante o Senhor que sempre nos orienta e nos mostra a decisão certa, por isso precisamos entender Deus.</I></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
						</TABLE>
					</TD> 
				</TR> 
				<TR>
					<TD ALIGN="CENTER"><HR WIDTH="100%"></TD> 
				</TR> 
			</TABLE>
		</TD>
		<TD WIDTH="1%">
			<TABLE WIDTH="100%">
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
								<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,21,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,21,'NOME'));?></TD>
								<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
				<TR>
					<TD STYLE="padding: 2px;" ALIGN="CENTER">
						<MARQUEE HEIGHT="60" DIRECTION="UP" ID="programacao" LOOP="-1" onMouseOver="this.stop();" onMouseOut="this.start();" SCROLLAMOUNT="1" SCROLLDELAY="150" TITLE="Programação Semanal.">
							<TABLE>
								<TR>
									<TD ALIGN="CENTER">Domingo:</TD>
								</TR>
								<TR>
									<TD>&nbsp;</TD>
								</TR>
								<TR>
									<TD><B>Escola Bíblica</B> - 10h:00</TD>
								</TR>
								<TR>
									<TD><B>Culto da Família</B> - 19h:30</TD>
								</TR>
								<TR>
									<TD><HR></TD>
								</TR>
								<TR>
									<TD ALIGN="CENTER">Quinta-Feira:</TD>
								</TR>
								<TR>
									<TD>&nbsp;</TD>
								</TR>
								<TR>
									<TD><B>Louvor e Oração</B> - 20h:00</TD>
								</TR>
								<TR>
									<TD><HR></TD>
								</TR>
								<TR>
									<TD ALIGN="CENTER">Sábado:</TD>
								</TR>
								<TR>
									<TD>&nbsp;</TD>
								</TR>
								<TR>
									<TD><B>Área Teen</B> - 20h:00</TD>
								</TR>
							</TABLE>
						</MARQUEE>
					</TD>
				</TR>
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
								<TD CLASS="secao">Calendário</TD>
								<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
				<TR>
					<TD STYLE="padding: 2px;"><IFRAME SRC="calendario.php" NAME="home" ID="home" WIDTH="100%" HEIGHT="130" MARGINWIDTH="0" MARGINHEIGHT="0" SCROLLING="NO" FRAMEBORDER="0" HSPACE="0" VSPACE="0" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
				</TR>
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
								<TD CLASS="secao">Clima</TD>
								<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
				<TR>
					<TD ALIGN="CENTER" STYLE="padding: 2px;"><IMG SRC="http://selos.climatempo.com.br/pr-ibipora.gif"></TD>
				</TR>
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
								<TD CLASS="secao">Conecte-se</TD>
								<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
				<TR>
					<TD ALIGN="CENTER" STYLE="padding: 2px;">
						<TABLE ALIGN="CENTER"> 
							<TR> 
								<TD ALIGN="RIGHT">Usu&aacute;rio:</TD> 
								<TD> 
									<INPUT CLASS="txt_menor" TYPE="TEXT" NAME="txt_usuario" ID="txt_usuario"> 
								</TD>
							</TR>
							<TR>
								<TD ALIGN="RIGHT">Senha:</TD> 
								<TD> 
									<INPUT CLASS="txt_menor" TYPE="PASSWORD" NAME="txt_senha" ID="txt_senha">
								</TD>
							</TR>
							<TR>
								<TD COLSPAN="2" ALIGN="CENTER">
									<INPUT TYPE="BUTTON" VALUE="OK">
									<INPUT TYPE="BUTTON" VALUE="Cancelar">
								</TD>
							</TR>
						</TABLE> 
					</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE> 
<? require_once('script_fim.php'); ?>