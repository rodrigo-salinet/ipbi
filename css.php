<STYLE TYPE="TEXT/CSS">
body {
	scrollbar-face-color: #DDEEFF;
	scrollbar-highlight-color: #FFFFFF;
	scrollbar-3dlight-color: #FFFFFF;
	scrollbar-darkshadow-color: #88add6;
	scrollbar-shadow-color: #FFFFFF;
	scrollbar-arrow-color: #FFFFFF;
	scrollbar-track-color: #FFFFFF;
	margin: 0px;
	padding: 0px;
	background-color: #EEFFEC;
	overflow: auto;
	border: 0px;
}
body, td, marquee, div, span, a, font, input, select {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #235640;
}
table {
	border-width: 0px;
	border-style: solid;
	border-collapse: collapse;
	empty-cells: show;
}
td {
	padding: 0px;
	vertical-align: middle;
<? if (basename($_SERVER['PHP_SELF']) == 'frm_cadastro.php') { ?>
	border-bottom: 1px dashed #CCCCCC;
<? } else { ?>
	border-width: 0px;
	border-style: solid;
<? } ?>
}
img {
	border: 0px;
}
a:link {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:visited {
	text-decoration: none;
}
hr {
	color: #DDEEFF;
}
.menu {
	background: url(imagens/fundo_menu.gif) repeat-x center center;
	padding: 1px;
	vertical-align: middle;
	filter: DropShadow(Color=#ffffff, OffX=1, OffY=1, Positive=1);
	white-space: nowrap;
	height: 25px;
}
.menu_lateral {
	border-bottom: 1px dashed #CCCCCC;
	padding: 2px;
}
.secao {
	background-image: url(imagens/fundo_topicos_02.gif);
	background-repeat: repeat-x;
	white-space: nowrap;
	text-align: center;
	font-weight: bolder;
}
.topo {
	background: url(imagens/fundo_topo.gif) repeat-x center center;
}
.sombra {
	filter: DropShadow(Color=#CCCCCC, OffX=1, OffY=1, Positive=1);
}
.txt {
	border: 1px inset #CCCCCC;
	width: 100%;
}
.txt_menor {
	border: 1px inset #CCCCCC;
}
.menu_contexto {
	position: absolute;
	display: none;
	background-color: #99FFFF;
	filter: Alpha(Opacity=80, FinishOpacity=80, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100);
	z-index: 10;
	cursor: hand;
}
.cel_menu_contexto {
	white-space: nowrap;
	font-family: Helvetica, sans-serif, Verdana, Arial;
	border-bottom: 1px dashed #0000FF;
	padding: 2px;
}
.sub_menu {
	position: absolute;
	z-index: 9;
	border: 1px solid #0000FF;
	padding: 5px;
	cursor: default;
	background-color: #FFFFFF;
	filter: Alpha(Opacity=80, FinishOpacity=80, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100);
	display: none;
}
.avisos {
	position: absolute;
	z-index: 10;
	background-color: #FFFFFF;
	filter: Alpha(Opacity=50, FinishOpacity=50, Style=10, StartX=10, StartY=100, FinishX=10, FinishY=100);
	font-size: 14px;
	font-weight: bolder;
}
.txt_topo {
	text-align: right;
	padding: 0px;
	font-size: 9px;
	filter: DropShadow(Color=#FFFFFF, OffX=1, OffY=1, Positive=1);
	padding-right: 5px;
	white-space: nowrap;
}
.esq {
	width: 0.1%;
	text-align: right;
	vertical-align: middle;
	white-space: nowrap;
}
.dir {
	width: 99.9%;
	text-align: left;
	vertical-align: middle;
	white-space: nowrap;
}
.titulo {
	text-align: center;
}
/**** Configurações da tabela com borda ****/
.sup_esq {
	width: 0.1%;
}
.sup_dir {
	width: 0.1%;
}
/*******************************************/
</STYLE>