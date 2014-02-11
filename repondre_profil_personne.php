<!DOCTYPE html> 
<html>
<head>
	<title>DailyMov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>

<body>
	<div data-role="page" id="page1" data-theme="b">
		<div data-role="header" id="header" style="text-align:center;">
			<div class="div_header" style="display:inline-block; vertical-align:top;"><input data-enhanced="true" value="Menu" id="menu" type="button"/></div>
			<div class="div_header" style="display:inline-block; vertical-align:middle; margin: 0% 10% "><img src="/img/logo2012.png" alt="DailyMov" width="320" height="89" /></div>
			<div class="div_header" style="display:inline-block; vertical-align:top;"><input data-enhanced="true" value="Tchat" type="button"/></div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c">
			<div id="droite" data-theme="a">
				<ul data-role="listview" >
					<li><a href="">Accueil</a></li>
					<li><a href="">Profil</a></li>
					<li><a href="">Tchat</a></li>
					<li><a href="">Réglages</a></li>
					<li><a href="">Partager sur FB</a></li>
				</ul>
			</div>
			<div id="gauche" style="text-align:center;">
				<div>
					<div><p>Robin Desbois</a></div>
					<img class="photoProfil" src="Photo-profil.png" alt="image_logo" style="width:50%;"/>
					<div>
						<p>Je suis cultivé, sérieux, intelligent et beau gosse</p>
						<p>Je suis cultivé, sérieux, intelligent et beau gosse</p>
						<p>Je suis cultivé, sérieux, intelligent et beau gosse</p>
						<p>Je suis cultivé, sérieux, intelligent et beau gosse</p>
					</div>
				</div>
				<div>
					<div class="div_header" style="display:inline-block; vertical-align:top;"><input data-enhanced="true" value="Refuser" id="Refuser" type="button"/></div>
					<div class="div_header" style="display:inline-block; vertical-align:top;"><input data-enhanced="true" value="Accepter" id="Accepter" type="button"/></div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		$(function(){
			$("#page1 #droite").hide();
			$("#page1 #menu").click(function(){
				if ($("#page1 #droite").is(":hidden")) {
					$("#page1 #droite").show();
				} else {
					$("#page1 #droite").hide();
				}
			});
		});
	</script>
	
	<!--<style type="text/css">

#page1 .ui-content #droite{
	visibility: visible;
	z-index:10;
	display:inline-block;
}

#page1 .ui-content #gauche{
	display:inline-block;
	z-index:-10;
}
	
#page1 .ui-content #gauche .photoProfil{
	width:50%;
	height:50%;
	left:20%;
}
	</style>-->
</body>
</html>