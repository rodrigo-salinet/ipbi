<? require_once('script_inicio.php'); ?>
<?
$sql_topo = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=2 ORDER BY SEQUENCIA";
$topo = mysql_query($sql_topo,$conexao);

$sql_rodape = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=2 ORDER BY SEQUENCIA";
$rodape = mysql_query($sql_rodape,$conexao);

$sql_ipb_ibipora = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=20 ORDER BY SEQUENCIA ASC";
$ipb_ibipora = mysql_query($sql_ipb_ibipora,$conexao);

$sql_ministerios = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=16 ORDER BY SEQUENCIA ASC";
$ministerios = mysql_query($sql_ministerios,$conexao);

$sql_louvor = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=19 ORDER BY SEQUENCIA ASC";
$louvor = mysql_query($sql_louvor,$conexao);

$sql_geral = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=$id_idioma AND ID_CATEGORIA=21 ORDER BY SEQUENCIA ASC";
$geral = mysql_query($sql_geral,$conexao);
?>
<DIV STYLE="background-color: #BEE5FE; background-image: url(imagens/fundo_pagina.gif);">
<TABLE ALIGN="CENTER" WIDTH="770" STYLE="background-color: #EEFFEC;">
	<TR>
		<TD WIDTH="1%"><IMG SRC="imagens/moldura_01.gif"></TD>
		<TD STYLE="background-image: url(imagens/moldura_02.gif); background-repeat: repeat-x;"></TD>
		<TD WIDTH="1%"><IMG SRC="imagens/moldura_03.gif"></TD>
	</TR>
	<TR>
		<TD STYLE="background-image: url(imagens/moldura_04.gif); background-repeat: repeat-y;"></TD>
		<TD>
			<TABLE WIDTH="100%">
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD>
									<TABLE WIDTH="100%" HEIGHT="80">
										<TR>
											<TD CLASS="topo" STYLE="padding: 2px;">
												<TABLE WIDTH="100%">
													<TR>
														<TD WIDTH="1%"><IMG SRC="imagens/sarca.gif"></TD>
														<TD STYLE="padding-left: 10px; text-align: left;">
															<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" WIDTH="232" HEIGHT="72" TITLE="Título" ALIGN="LEFT">
                                                                           	<PARAM NAME="allowScriptAccess" VALUE="sameDomain">
                                                                           	<PARAM NAME="movie" VALUE="flash/titulo.swf">
                                                                           	<PARAM NAME="play" VALUE="false">
                                                                           	<PARAM NAME="menu" VALUE="false">
                                                                           	<PARAM NAME="quality" VALUE="best">
                                                                           	<PARAM NAME="wmode" VALUE="transparent">
                                                                           	<EMBED ALLOWSCRIPTACCESS="sameDomain" SRC="flash/titulo.swf" PLAY="false" MENU="FALSE" QUALITY="best" WMODE="transparent" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" TYPE="application/x-shockwave-flash" WIDTH="232" HEIGHT="72"></EMBED>
															</OBJECT>
														<!--IMG SRC="imagens/titulo.gif" CLASS="txt_topo"--></TD>
														<TD><!--IMG SRC="imagens/familia.gif" CLASS="txt_topo"--></TD>
													</TR>
													</TABLE>
											</TD>
											<TD WIDTH="1%" VALIGN="MIDDLE" CLASS="topo" STYLE="padding: 2px;">
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="txt_topo"><B><?=htmlspecialchars(@mysql_result($topo,0,'TEXTO'));?></B></TD>
													</TR>
													<TR>
														<TD CLASS="txt_topo"><?=htmlspecialchars(@mysql_result($topo,1,'TEXTO'));?></TD>
													</TR>
													<TR>
														<TD CLASS="txt_topo"><?=htmlspecialchars(@mysql_result($topo,2,'TEXTO'));?></TD>
													</TR>
													<TR>
														<TD CLASS="txt_topo"><A HREF="mailto:<?=htmlspecialchars(@mysql_result($topo,3,'TEXTO'));?>"><?=htmlspecialchars(@mysql_result($topo,3,'TEXTO'));?></A></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
							<TR>
								<TD>
									<TABLE WIDTH="100%">
										<TR>
											<TD VALIGN="MIDDLE">
												<TABLE WIDTH="100%">
													<TR>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">Home</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">IPB Ibiporã</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">Louvor</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">Geral</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">B&iacute;blia On-Line</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD ALIGN="CENTER" CLASS="menu">Ajuda</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><IMG SRC="imagens/telefone.gif" TITLE="(43) 3268-2284"></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><IMG SRC="imagens/envelope.gif" TITLE="Rua Primeiro de Maio, 493 - Centro."></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="mailto:atendimento@ipbi.org.br"><IMG SRC="imagens/@.gif" TITLE="atendimento@ipbi.org.br"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="javascript:window.external.AddFavorite('http://<?=$_SERVER['HTTP_HOST'];?>','<?=@mysql_result($ipbi,0,'TEXTO');?>');"><IMG SRC="imagens/estrela.gif" TITLE="Adicione ao Favoritos"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://<?=$_SERVER['HTTP_HOST'];?>') ;return false" HREF="http://<?=$_SERVER['HTTP_HOST'];?>"><IMG SRC="imagens/casinha.gif" TITLE="Defina sua página inicial"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="javascript:print();"><IMG SRC="imagens/impressora.gif" TITLE="Imprimir"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">
															<SELECT NAME="op_navegacao" onChange="acessar(this);">
																<OPTION VALUE="">-- Navegue Aqui --</OPTION>
																<OPTGROUP LABEL="<?=htmlspecialchars(@mysql_result($categorias,19,'NOME'));?>"></OPTGROUP>
<? for ($n = 0; $n < @mysql_num_rows($ipb_ibipora); $n++) { ?>
																<OPTION VALUE="<?=htmlspecialchars(@mysql_result($ipb_ibipora,$n,'LINK'));?>"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($ipb_ibipora,$n,'TEXTO'));?></OPTION>
<? } ?>
																<OPTGROUP LABEL="<?=htmlspecialchars(@mysql_result($categorias,15,'NOME'));?>"></OPTGROUP>
<? for ($n = 0; $n < @mysql_num_rows($ministerios); $n++) { ?>
																<OPTION VALUE="<?=htmlspecialchars(@mysql_result($ministerios,$n,'LINK'));?>"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($ministerios,$n,'TEXTO'));?></OPTION>
<? } ?>
																<OPTGROUP LABEL="<?=htmlspecialchars(@mysql_result($categorias,18,'NOME'));?>"></OPTGROUP>
<? for ($n = 0; $n < @mysql_num_rows($louvor); $n++) { ?>
																<OPTION VALUE="<?=htmlspecialchars(@mysql_result($louvor,$n,'LINK'));?>"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($louvor,$n,'TEXTO'));?></OPTION>
<? } ?>
																<OPTGROUP LABEL="<?=htmlspecialchars(@mysql_result($categorias,20,'NOME'));?>"></OPTGROUP>
<? for ($n = 0; $n < @mysql_num_rows($geral); $n++) { ?>
																<OPTION VALUE="<?=htmlspecialchars(@mysql_result($geral,$n,'LINK'));?>"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($geral,$n,'TEXTO'));?></OPTION>
<? } ?>
															</SELECT>
														</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="<?=basename($_SERVER['PHP_SELF']);?>?idioma=<?=urlencode('pt-br');?>"><IMG SRC="imagens/brasil_icone.gif" TITLE="Português"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="<?=basename($_SERVER['PHP_SELF']);?>?idioma=<?=urlencode('es-es');?>"><IMG SRC="imagens/espanha_icone.gif" TITLE="Español"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu"><A HREF="<?=basename($_SERVER['PHP_SELF']);?>?idioma=<?=urlencode('en-us');?>"><IMG SRC="imagens/usa_icone.gif" TITLE="English"></A></TD>
														<TD WIDTH="1%" ALIGN="CENTER" NOWRAP CLASS="menu">|</TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
							</TABLE>
					</TD>
				</TR>
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD VALIGN="TOP" WIDTH="1%" STYLE="padding: 2px;">
									<TABLE WIDTH="100%">
										<TR>
											<TD NOWRAP>
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
														<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,25,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,25,'NOME'));?></TD>
														<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
										<TR>
											<TD>
												<TABLE STYLE="width: 100%;">
													<TR>
														<TD CLASS="dir"><INPUT CLASS="txt" TYPE="text" NAME="txt_busca" ID="txt_busca"></TD>
														<TD CLASS="esq"><INPUT TYPE="BUTTON" VALUE="OK"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
										<TR>
											<TD NOWRAP>
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
														<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,19,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,19,'NOME'));?></TD>
														<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
<? for ($n = 0; $n < @mysql_num_rows($ipb_ibipora); $n++) { ?>
										<TR>
											<TD CLASS="menu_lateral" NOWRAP TITLE="<?=htmlspecialchars(@mysql_result($ipb_ibipora,$n,'DESCRICAO'));?>"><A HREF="<?=@mysql_result($ipb_ibipora,$n,'LINK');?>" TARGET="home"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($ipb_ibipora,$n,'TEXTO'));?></A></TD>
										</TR>
<? } ?>
										<TR>
											<TD NOWRAP>
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
														<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,15,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,15,'NOME'));?></TD>
														<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
<? for ($n = 0; $n < @mysql_num_rows($ministerios); $n++) { ?>
										<TR>
											<TD CLASS="menu_lateral" NOWRAP TITLE="<?=htmlspecialchars(@mysql_result($ministerios,$n,'DESCRICAO'));?>"><A HREF="<?=@mysql_result($ministerios,$n,'LINK');?>" TARGET="home"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($ministerios,$n,'TEXTO'));?></A></TD>
										</TR>
<? } ?>
										<TR>
											<TD NOWRAP>
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
														<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,18,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,18,'NOME'));?></TD>
														<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
<? for ($n = 0; $n < @mysql_num_rows($louvor); $n++) { ?>
										<TR>
											<TD CLASS="menu_lateral" NOWRAP TITLE="<?=htmlspecialchars(@mysql_result($louvor,$n,'DESCRICAO'));?>"><A HREF="<?=@mysql_result($louvor,$n,'LINK');?>" TARGET="home"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($louvor,$n,'TEXTO'));?></A></TD>
										</TR>
<? } ?>
										<TR>
											<TD CLASS="menu_lateral" NOWRAP>
												<TABLE WIDTH="100%">
													<TR>
														<TD CLASS="sup_esq"><IMG SRC="imagens/fundo_topicos_01.gif"></TD>
														<TD CLASS="secao" TITLE="<?=htmlspecialchars(@mysql_result($categorias,20,'DESCRICAO'));?>"><?=htmlspecialchars(@mysql_result($categorias,20,'NOME'));?></TD>
														<TD CLASS="sup_dir"><IMG SRC="imagens/fundo_topicos_03.gif"></TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
<? for ($n = 0; $n < @mysql_num_rows($geral); $n++) { ?>
										<TR>
											<TD CLASS="menu_lateral" NOWRAP TITLE="<?=htmlspecialchars(@mysql_result($geral,$n,'DESCRICAO'));?>"><A HREF="<?=@mysql_result($geral,$n,'LINK');?>" TARGET="home"><?=@$marcador;?> <?=htmlspecialchars(@mysql_result($geral,$n,'TEXTO'));?></A></TD>
										</TR>
<? } ?>
									</TABLE>
								</TD>
								<TD STYLE="vertical-align: top;"><MARQUEE WIDTH="100%" BEHAVIOR="SCROLL" DIRECTION="LEFT" ID="saudacao" LOOP="-1" onMouseOver="this.stop();" onMouseOut="this.start();" SCROLLAMOUNT="2" SCROLLDELAY="10" TITLE="Saudação."></MARQUEE><BR>
									<IFRAME SRC="home.php" NAME="home" ID="home" WIDTH="100%" MARGINWIDTH="0" HEIGHT="500" MARGINHEIGHT="0" SCROLLING="auto" FRAMEBORDER="0" HSPACE="0" VSPACE="0" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME>
								</TD>
							</TR>
							</TABLE>
					</TD>
				</TR>
				<TR>
					<TD>
						<TABLE WIDTH="100%">
							<TR>
								<TD ALIGN="CENTER">
									<TABLE WIDTH="100%">
										<TR>
											<TD><HR WIDTH="100%"></TD>
											<TD WIDTH="1%" STYLE="white-space: nowrap; border: 2px outset #DDEEFF; padding: 3px; text-align: center;">
												<B><?=htmlspecialchars(@mysql_result($rodape,0,'TEXTO'));?></B><BR>
												<?=htmlspecialchars(@mysql_result($rodape,1,'TEXTO'));?><BR>
												<?=htmlspecialchars(@mysql_result($rodape,2,'TEXTO'));?><BR>
												<A HREF="mailto:<?=htmlspecialchars(@mysql_result($rodape,3,'TEXTO'));?>"><?=htmlspecialchars(@mysql_result($rodape,3,'TEXTO'));?></A>
											</TD>
											<TD><HR WIDTH="100%"></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
							<TR>
								<TD COLSPAN="2">
									<TABLE WIDTH="100%">
										<TR>
											<TD WIDTH="1%" STYLE="white-space: nowrap; border: 2px outset #DDEEFF; padding: 1px;">
												<TABLE>
													<TR>
														<TD STYLE="white-space: nowrap; padding: 2px;">Este site foi visitado</TD>
														<TD STYLE="white-space: nowrap; padding: 2px;"><!--IMG SRC="http://www.sercomtel.com.br/cgi-bin/Counter.cgi?df=ipbi.dat&dd=D&ft=0"--></TD>
														<TD STYLE="white-space: nowrap; padding: 2px;">vezes.</TD>
													</TR>
												</TABLE>
											</TD>
											<TD><HR WIDTH="100%"></TD>
										</TR>
									</TABLE>
								</TD>
							</TR>
							<TR>
								<TD COLSPAN="2" ALIGN="CENTER">
											<?=htmlspecialchars($_SERVER['HTTP_HOST']);?> <SUP>&copy;</SUP> <?=date('Y');?> - <?=htmlspecialchars(@mysql_result($rodape,4,'TEXTO'));?>.
								</TD>
							</TR>
							</TABLE>
					</TD>
				</TR>
				<TR>
					<TD>
						<TABLE ALIGN="RIGHT" WIDTH="1%">
							<TR>
								<TD><IMG SRC="imagens/ie.gif"></TD>
								<TD WIDTH="1%">-</TD>
								<TD STYLE="white-space: nowrap;" TITLE="Rodrigo Salinet da Silva">by <A HREF="mailto:webmaster@ipbi.org.br">Odig</A></TD>
								<TD WIDTH="1%">-</TD>
								<TD><IMG SRC="imagens/cadeado.gif" STYLE="filter: Alpha(Opacity=0, FinishOpacity=0, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100); cursor: hand;" onMouseOver="this.style.filter = '';" onMouseOut="this.style.filter = 'Alpha(Opacity=0, FinishOpacity=0, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100)';" onClick="window.open('adm.php','adm','width=215,height=110,scrollbars=yes,resizable=yes');"></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
			</TABLE>
		</TD>
		<TD STYLE="background-image: url(imagens/moldura_06.gif); background-repeat: repeat-y;"></TD>
	</TR>
	<TR>
		<TD CLASS="sup_esq"><IMG SRC="imagens/moldura_07.gif"></TD>
		<TD STYLE="background-image: url(imagens/moldura_08.gif); background-repeat: repeat-x;"></TD>
		<TD CLASS="sup_dir"><IMG SRC="imagens/moldura_09.gif"></TD>
	</TR>
</TABLE>
</DIV>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">ver_hoje();</SCRIPT>
<? require_once('script_fim.php'); ?>