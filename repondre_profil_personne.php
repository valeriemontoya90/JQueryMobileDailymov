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

<body>
	<div data-role="page" class="page0" data-theme="b">
		<div data-role="header" id="header" style="width=100%; height=100%;">
			<div class="div_header" style="display:inline-block; vertical-align:top; position:absolute; top:0px; left:0px; "><input data-enhanced="true" value="Menu" class="aller_menu" type="button"/></div>
			<div class="div_header" style="display:inline-block; vertical-align:middle; margin-left:40%;"><img src="" alt="DailyMov" width="" height="" /></div>
			<div class="div_header" style="display:inline-block; vertical-align:top; position:absolute; top:0px; right:0px; "><input data-enhanced="true" value="Tchat" type="button"/></div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c">
			<div class="menu" data-theme="c">
				<ul data-role="listview">
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
					<img class="photoProfil" src="images/Photo-profil.png" alt="image_logo" style="width:50%;"/>
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

</body>
</html>