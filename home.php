<!DOCTYPE html> 
<html>
<head>
	<title>DailyMov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<script src="fonction_menu.js"></script>
</head>

<body style="background-image:url(''); margin:0px; padding:0px;">
	<div data-role="page" class="page0" data-theme="b">
		<div data-role="header" id="header" style="height:100%; background:black;">
			<div class="div_header" style="display:inline-block; vertical-align:top; position:absolute; top:0px; left:0px; margin-top:1%;margin-left:1%; padding:0px;"><img src="images/menu.png" alt="logo_menu" style="width:40%; height:40%;"/><!--<input data-enhanced="true" value="Menu" class="aller_menu" type="button"/>--></div>
			<div class="div_header" style="display:inline-block; vertical-align:middle; margin-left:40%;"><img src="" alt="DailyMov'" style="width:30%; height:30%;"/></div>
			<div class="div_header" style="display:inline-block; vertical-align:top; position:absolute; top:0px; right:0px; "><img src="images/bulle.png" alt="logo_menu" style="width:30%; height:30%;"/></div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c" style="background-image:url('images/BG.jpg');">
			<div class="menu" data-theme="a">
				<!--<ul data-role="listview">
					<li><a href="">Accueil</a></li>
					<li><a href="">Profil</a></li>
					<li><a href="">Tchat</a></li>
					<li><a href="">Réglages</a></li>
					<li><a href="">Partager sur FB</a></li>
				</ul>-->
			</div>
			<div id="gauche" style="text-align:center;">
				<img class="photoProfil" src="images/Photo-profil.png" alt="image_logo" style="width:200px; height:230px;"/>
				<p>Salut Robin</p>
				<a href="propositionsFilms.php" data-role="button" style="margin-bottom:5%;">Voir Film</a>
				<a href="" data-role="button">Proposition en attente</a>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		/*$(function(){
			$(".page0 .menu").hide();
			$(".page1 .aller_menu").click(function(){
				if ($(".page0 .menu").is(":hidden")) {
					$(".page0 .menu").show();
				} else {
					$(".page0 .menu").hide();
				}
			});
		});*/
	</script>

</body>
</html>