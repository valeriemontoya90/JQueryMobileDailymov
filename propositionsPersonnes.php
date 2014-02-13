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
		<div data-role="content" class="ui-content" data-theme="c" >
			<div class="menu" data-theme="c">
				<!--<ul data-role="listview">
					<li><a href="">Accueil</a></li>
					<li><a href="">Profil</a></li>
					<li><a href="">Tchat</a></li>
					<li><a href="">Réglages</a></li>
					<li><a href="">Partager sur FB</a></li>
				</ul>-->
			</div>
			<ul data-role="listview" data-inset="true" style="margin: 0em 0px;" class="allerversSeances">
				<li data-role="list-divider">
					<a href="proposer_profil_personne.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/Photo-profil.png" alt="image_logo" style="width:100px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top; margin-left:2%;" >
							<h3>Robin Stepczak</h3>
							<p><strong>Homme</strong> 21 ans</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="proposer_profil_personne.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/Photo-Pierre.png" alt="image_logo" style="width:100px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top; margin-left:2%;" >
							<h3>Pierre Fayol</h3>
							<p><strong>Homme</strong> 23 ans</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="proposer_profil_personne.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/Photo-Val.png" alt="image_logo" style="width:100px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top; margin-left:2%;" >
							<h3>Valérie Montoya</h3>
							<p><strong>Femme</strong> 23 ans</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="proposer_profil_personne.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/Photo-Gui.png" alt="image_logo" style="width:100px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top; margin-left:2%;" >
							<h3>Guillaume Despres</h3>
							<p><strong>Homme</strong> 20 ans</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<script type="text/javascript">
		/*$(function(){
			$(".page3 .menu").hide();
			$(".page3 .aller_menu").click(function(){
				if ($(".page3 .menu").is(":hidden")) {
					$(".page3 .menu").show();
				} else {
					$(".page3 .menu").hide();
				}
			});
		});*/
	</script>
</body>
</html>