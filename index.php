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

<body style="margin:0px; padding:0px;">
	<div data-role="page" class="page0" data-theme="b">
		<div data-role="header" id="header" style="height:57px; background:#d14233; border: 0px solid; position:relative;">
			<div class="div_header" style="display:inline-block; 
				vertical-align:top; 
				position:absolute; 
				top:0px; 
				left:0px; 
				margin-top:12px;
				margin-left:3%;
				width:12%;
				padding:0px;">
				<img src="images/menu.png" alt="logo_menu" style="width:35px; height: 35px;"/>
				<!--<input data-enhanced="true" value="Menu" class="aller_menu" type="button"/>-->
			</div>
			<div class="div_header" style="display:inline-block; 
				vertical-align:middle;
				width:15%;
				font-size:35px;
				font-family:Verdana;
				margin-left:29%;
				margin-top:8px;">
				DailyMov
			</div>
			<div class="div_header" style="
				display:inline-block; 
				width:5%;
				vertical-align:top; 
				margin-top:12px;
				margin-left:40%;">
				<img src="images/bulle.png" alt="logo_menu" style="width:35px; height:35px;"/>
			</div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c" style="background-image:url('images/BG-petit.png');">
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
				<img class="photoProfil" src="images/Photo-Pierre.png" alt="image_logo" style="
					width:160px; 
					height:160px;
					margin-top:3%;"/>
				<div style="margin:0px; padding: 0px; margin-bottom:12%; color:white;"><p>Salut Pierre !</p></div>
				<a href="propositionsFilms.php" data-role="button" style="
					margin-bottom:5%; 
					background:#d14233;
					color:white; 
					border-radius: 0em;  
					border: 0px solid;
					width:80%;
					margin-left:10%;
					margin-bottom:3%;
					font-size:20px;
					font-family:Arial;">
					VOIR UN FILM
				</a>
				<p><a href="" data-role="button" style="
					background:#d14233; 
					color:white;
					border-radius: 0em; 
					border: 0px solid ;
					width:80%;
					margin-left:10%;
					font-size:20px;
					font-family:Arial;
					">
					<span style="border-radius: 1em;">PROPOSITION</span>
				</a><p>
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