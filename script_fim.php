<?
$sql_categoria_menu = "SELECT * FROM CATEGORIAS WHERE NOME LIKE 'Menu Contexto'";
$categoria_menu = mysql_query($sql_categoria_menu,$conexao);
$id_categoria_menu = mysql_result($categoria_menu,0,'ID');
$sql_menu_contexto = "SELECT * FROM TEXTOS WHERE ID_IDIOMA=" . $id_idioma . ' AND ID_CATEGORIA=' . $id_categoria_menu . " ORDER BY SEQUENCIA ASC";
$menu_contexto = mysql_query($sql_menu_contexto,$conexao);
?>
<OBJECT ID="dlgHelper" CLASSID="clsid:3050f819-98b5-11cf-bb82-00aa00bdce0b" WIDTH="0px" HEIGHT="0px"></OBJECT>
<DIV ID="div_menu_contexto" CLASS="menu_contexto" onMouseMove="mover();">
	<TABLE STYLE="border: 1px dashed #0000FF;" WIDTH="1%">
<? for ($n = 0; $n < @mysql_num_rows($menu_contexto); $n++) { ?>
		<TR onMouseOver="this.style.backgroundColor = '#EEEEEE';" onMouseOut="this.style.backgroundColor = '';" <?=@mysql_result($menu_contexto,$n,'JAVASCRIPT');?>>
			<TD CLASS="cel_menu_contexto">
				<IMG SRC="<?=@$dir_anterior;?>imagens/<?=@mysql_result($menu_contexto,$n,'IMG');?>" BORDER="0">
			</TD>
			<TD CLASS="cel_menu_contexto"><?=htmlspecialchars(@mysql_result($menu_contexto,$n,'TEXTO'));?></TD>
		</TR>
<? } ?>
	</TABLE>
</DIV>
<?
// Fecha todas as consultas.
@mysql_free_result($categoria_menu);
@mysql_free_result($menu_contexto);

// Fecha consulta do STATUS do banco de dados:
@mysql_free_result($tbl_status);

// Fecha conexao com o banco de dados:
@mysql_close($conexao);
//echo '<PRE>'; print_r($GLOBALS); exit('</PRE>');

if (trim(@$msg) != '') {
?>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">alert('<?=$msg;?>');</SCRIPT>
<? } ?>
</BODY>
</HTML>
<?
// Envia o buffer de saída para o cliente.
while(@ob_end_flush());
?>