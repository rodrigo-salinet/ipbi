<?
require_once('../script_inicio.php');
$sql_webmail = "SELECT * FROM PESSOAS";
$webmail = mysql_query($sql_webmail,$conexao);
?>
<DIV STYLE="position: static; z-index: 1000; left: 0px; top: 0px;">
<TABLE ALIGN="CENTER" WIDTH="780" STYLE="border: 1px dashed #CCCCCC; background-color: #FFFFFF;">
	<TR>
		<TD STYLE="background-image: url(../imagens/fundo_topo.gif); background-repeat: repeat-x; height: 80px; padding: 0px;">
			<TABLE WIDTH="100%">
				<TR>
					<TD STYLE="padding: 0px;">
						<TABLE WIDTH="100%">
							<TR>
								<TD WIDTH="1%"><IMG SRC="../imagens/sarca.gif"></TD>
								<TD WIDTH="1%"><IMG SRC="../imagens/titulo.gif"></TD>
								<TD STYLE="text-align: center;"><IMG SRC="../imagens/familia.gif"></TD>
							</TR>
						</TABLE>
					</TD>
					<TD STYLE="padding: 0px; vertical-align: middle;" WIDTH="1%">
						<TABLE>
							<TR>
								<TD CLASS="txt_topo"><B>Igreja Presbiteriana de Ibiporã</B></TD>
							</TR>
							<TR>
								<TD CLASS="txt_topo">Rua Primeiro de Maio, 493 - Centro</TD>
							</TR>
							<TR>
								<TD CLASS="txt_topo">CEP: 86200-000 - Ibiporã - Paraná</TD>
							</TR>
							<TR>
								<TD CLASS="txt_topo">Fones: +55 (43) 3268-2284 | +55 (43) 3258-5928</TD>
							</TR>
							<TR>
								<TD CLASS="txt_topo">E-mail: <A HREF="mailto:atendimento@ipbi.org.br">atendimento@ipbi.org.br</A></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD STYLE="padding: 0px;"><MARQUEE DIRECTION="LEFT" ID="saudacao" LOOP="-1" onMouseOver="this.stop();" onMouseOut="this.start();" SCROLLAMOUNT="2" SCROLLDELAY="20" STYLE="text-decoration: underline;" TITLE="Informações."></MARQUEE></TD>
	</TR>
	<TR>
		<TD><SPAN ID="cumprimento"></SPAN>&nbsp;<INPUT ID="txt_nome" NAME="txt_nome" TYPE="TEXT" VALUE="Prezado(a) Sr(a)." STYLE="font-family: Tahoma, Verdana, Arial, sans-serif; border: 0px;"></TD>
	</TR>
	<TR>
		<TD STYLE="text-indent: 20px; line-height: 20px;" ALIGN="CENTER">
			<TEXTAREA NAME="texto" COLS="120" ROWS="10" ID="texto" STYLE="border: 0px; font-family: Tahoma, Verdana, Arial, sans-serif;">Texto...</TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TD STYLE="text-indent: 20px; line-height: 20px;">
			<P>Agradeço a atenção e estou &agrave; disposição para Atendimento Personalizado pelo fone (43) 3268-2284 ou pelo e-mail <A HREF="mailto:webmaster@ipbi.org.br" ID="link_email1" NAME="link_email1">webmaster@ipbi.org.br</A> ou ainda pelo Exclusivo Atendimento On-Line atrav&eacute;s do MSN <A HREF="mailto:digo_salin@hotmail.com" ID="link_msn1" NAME="link_msn1">digo_salin@hotmail.com</A> (Diretamente no setor de <SPAN ID="span_setor1">WebMaster</SPAN>).</P>
		</TD>
	</TR>
	<TR>
		<TD STYLE="padding-left: 25px;">Saudosamente:</TD>
	</TR>
	<TR>
		<TD STYLE="padding-left: 45px; line-height: 20px;">
			<SELECT ID="op_nome" NAME="op_nome" TITLE="Selecione o Nome." onChange="atualiza_nome();">
<? for ($n = 0; $n < @mysql_num_rows($webmail); $n++) { ?>
				<OPTION VALUE="<?=@mysql_result($webmail,$n,'ID');?>"><?=@mysql_result($webmail,$n,'NOME');?></OPTION>
<? } ?>
			</SELECT>
			<BR>
			<A HREF="http://www.ipbi.org.br">Igreja Presbiteriana de Ibiporã</A> - <SPAN ID="span_setor2">WebMaster</SPAN><BR> 
			E-mail: <A HREF="mailto:webmaster@ipbi.org.br" ID="link_email2" NAME="link_email2">webmaster@ipbi.org.br</A><BR>
			MSN: <A HREF="mailto:digo_salin@hotmail.com" ID="link_msn2" NAME="link_msn2">digo_salin@hotmail.com</A>
		</TD>
	</TR>
	<TR>
		<TD STYLE="background-image: url(../imagens/fundo_rodape.gif); background-repeat: repeat-x; height: 80px; padding: 0px; vertical-align: middle;"> 
			<TABLE WIDTH="100%">
				<TR>
					<TD><B>Igreja Presbiteriana de Ibiporã.</B></TD>
					<TD STYLE="text-align: right;">Site: <A HREF="http://www.ipbi.org.br">www.ipbi.org.br</A>.</TD>
				</TR>
				<TR>
					<TD>Endereço: Rua Primeiro de Maio, 493 - Centro.</TD>
					<TD STYLE="text-align: right;">E-mail: <A HREF="mailto:atendimento@ipbi.org.br">atendimento@ipbi.org.br</A>.</TD>
				</TR>
				<TR>
					<TD>CEP: 86200-000 - Ibiporã - Paraná - Brasil.</TD>
					<TD STYLE="text-align: right;">MSN: <A HREF="mailto:digo_salin@hotmail.com">digo_salin@hotmail.com</A>.</TD>
				</TR>
				<TR>
					<TD COLSPAN="2">Fones: +55 (43)3268-2284 | +55 (43)3258-5928 | +55 (43)3258-1642.</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
</DIV>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function atualiza_nome() {
	var txt_itens = new Array();
<? for ($n = 0; $n < @mysql_num_rows($webmail); $n++) { ?>
	txt_itens[(<?=$n;?> + 1)] = '<?=mysql_result($webmail,$n,'ID');?>,<?=mysql_result($webmail,$n,'NOME');?>,<?=mysql_result($webmail,$n,'SETOR');?>,<?=mysql_result($webmail,$n,'EMAIL');?>,<?=mysql_result($webmail,$n,'MSN_YAHOO');?>';
<? } ?>
	var op_nome = document.getElementById('op_nome');
	var link_email1 = document.getElementById('link_email1');
	var link_email2 = document.getElementById('link_email2');
	var link_msn1 = document.getElementById('link_msn1');
	var link_msn2 = document.getElementById('link_msn2');
	var span_setor1 = document.getElementById('span_setor1');
	var span_setor2 = document.getElementById('span_setor2');
	var id_op = parseInt(op_nome.value);
	var txt_item = txt_itens[id_op].split(',');

	link_email1.href = 'mailto:' + txt_item[3];
	link_email1.innerHTML = txt_item[3];
	link_email2.href = 'mailto:' + txt_item[3];
	link_email2.innerHTML = txt_item[3];

	link_msn1.href = 'mailto:' + txt_item[4];
	link_msn1.innerHTML = txt_item[4];
	link_msn2.href = 'mailto:' + txt_item[4];
	link_msn2.innerHTML = txt_item[4];

	span_setor1.innerHTML = txt_item[2];
	span_setor2.innerHTML = txt_item[2];
}
function saudacao() {
	var hoje = new Date();
	var dia = parseInt(hoje.getDate());
	var ano = parseInt(hoje.getFullYear());
	var hora =  parseInt(hoje.getHours());
	var minuto = parseInt(hoje.getMinutes());
	var segundo = parseInt(hoje.getSeconds());
	var saudacao = document.getElementById('saudacao');
	var cumprimento = document.getElementById('cumprimento');
	var dia_semana = new Array('Domingo','Segunda-Feira','Terça-Feira','Quata-Feira','Quinta-Feira','Sexta-Feira','S&aacute;bado');
	var mes = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
	var mostrar = 'Olá';
	if (hora >= 0 && hora <= 11) {
		mostrar = 'Bom Dia';
	}
	if (hora >= 12 && hora <= 17) {
		mostrar = 'Boa Tarde';
	}
	if (hora >= 18 && hora <= 23) {
		mostrar = 'Boa Noite';
	}
	if (hora < 10) {
		hora = '0' + hora;
	}
	if (minuto < 10) {
		minuto = '0' + minuto;
	}
	if (segundo < 10) {
		segundo = '0' + segundo;
	}
	saudacao.innerHTML = '<b>' + dia_semana[hoje.getDay()] + '</b>, <b>' + dia + '</b>-<b>' + mes[hoje.getMonth()] + '</b>-<b>' + ano + '</b>. <b>' + hora + '</b>:<b>' + minuto + '</b>:<b>' + segundo + '</b>';
	cumprimento.innerHTML = '<B>' + mostrar + '</B>';
	window.setTimeout('saudacao();', 100);
}
saudacao();
</SCRIPT>
<? require_once('../script_fim.php'); ?>