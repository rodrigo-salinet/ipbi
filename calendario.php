<? require_once('script_inicio.php'); ?>
<STYLE TYPE="TEXT/CSS">
td {
	border: 1px solid #CCCCCC;
	text-align: center;
	padding: 1px;
	cursor: default;
}
</STYLE>
<?
/*$dt = mktime(0, 0, 0, 7, 2, 2000);
$teste = date('w', $dt);
exit($teste . ' - ' . $dt);*/
$dia = date('j');
$mes = date('n');
$ano = date('Y');
$meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
$dias = array('D','S','T','Q','Q','S','S');
$titulo_dias = array('Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado');
$total_dias = date('t');
?>
<TABLE ALIGN="CENTER">
	<TR>
		<TD COLSPAN="7"><B><?=$meses[($mes - 1)];?></B> <?=$ano;?></TD>
	</TR>
	<TR>
<? for ($n = 0; $n < count($dias); $n++) { ?>
		<TD BGCOLOR="#CAFCC4"><B TITLE="<?=$titulo_dias[$n];?>"><?=$dias[$n];?></B></TD>
<? } ?>
	</TR>
<?
for ($n = 1; $n <= $total_dias; $n++) {
	$dt_tmp = mktime(0, 0, 0, $mes, $n, $ano);
	if (date('w', $dt_tmp) == 0) {
?>
	<TR>
<?
	}
	if ($n == 1) {
		if (date('w', $dt_tmp) > 0) {
			for ($i = 0; $i < date('w', $dt_tmp); $i++) {
?>
		<TD>&nbsp;</TD>
<?
			}
		}
	}
	$estilo = '';
	if ($n == $dia) {
		$estilo = ' STYLE="font-weight: bolder; background-color: #CCCCCC;"';
	}
?>
		<TD<?=$estilo;?>><?=$n;?></TD>
<?
	if ($n == $total_dias) {
		if (date('w', $dt_tmp) < 6) {
			for ($i = 6; $i > date('w', $dt_tmp); $i--) {
?>
		<TD>&nbsp;</TD>
<?
			}
		}
	}
	if (date('w', $dt_tmp) == 6) {
?>
	</TR>
<?
	}
}
?>
</TABLE>
<? require_once('script_fim.php'); ?>