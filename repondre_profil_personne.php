<!DOCTYPE html> 
<html>
<head>
	<title>DailyMov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<link rel="apple-touch-icon" href="images/logo.png"/>
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
				margin-left:41%;">
				<a href="contact.php">
					<img src="images/bulle.png" alt="logo_menu" style="width:35px; height:35px;"/>
				</a>
			</div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c" style="
			background-image:url('images/BG-petit.png');
			background-size: cover;
			height:500px;">
			<div class="menu" data-theme="a">
			</div>
			<div id="gauche" style="text-align:center;">
				<div style="margin:0px; padding: 0px; margin-bottom:0%; color:white;"><p>Robin Stepzcak</p></div>
				<img class="photoProfil" src="images/Photo-profil.png" alt="image_logo" style="
					width:160px; 
					height:160px;
					margin-top:3%;"/>
				<div style="margin:5%; margin-bottom:12%;">
					<p style="color:white; margin:0px;">"J'aime le foot et le cinéma"</p><br/>
					<p style="color:white; margin:0px;">Ryan Initiative</p>
					<p style="color:white; margin:0px;">MK2 Bibliotheque - 17h30 VO</p>
				</div>
				<div>
					<div style="
							display:inline-block;
							width:45%;
							margin:0px;
							margin-bottom:10%; ">
						<a href="index.php" data-role="button" style="
							padding:0%; 
							background:#74aa81;
							color:white; 
							border-radius: 0em;  
							border: 0px solid;
							//margin-left:10%;
							font-size:13px;
							font-family:Arial;">
							ACCEPTER
						</a>
					</div>
					<div style="
							display:inline-block;
							width:45%;
							margin:0px;
							margin-bottom:10%; ">
						<a href="index.php" data-role="button" style="
							padding:0%; 
							background:#d14233;
							color:white; 
							border-radius: 0em;  
							border: 0px solid;
							//margin-left:10%;
							font-size:13px;
							font-family:Arial;">
							REFUSER
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>