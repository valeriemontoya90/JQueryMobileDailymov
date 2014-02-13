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

<body style='color:red;'>
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
				<img src="images/bulle.png" alt="logo_menu" style="width:35px; height:35px;"/>
			</div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c" style="padding:0px; background:white;">
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
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film03.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">Robocop</h3></p>
								<p style="color:gray;">Chatelet 75001</p>
							</div>
						</a>
					</div>
				</li>
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film01.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">Jack et la mécanique du coeur</h3></p>
								<p style="color:gray;">La Villete 75019 Paris</p>
							</div>
						</a>
					</div>
				</li>
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film02.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">L'île des Miam-mimaux</h3></p>
								<p style="color:gray;">La Villete 75019 Paris</p>
							</div>
						</a>
					</div>
				</li>
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film6.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">American Bluff</h3></p>
								<p style="color:gray;">Saint Denis 93000</p>
							</div>
						</a>
					</div>
				</li>
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film6.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">American Bluff</h3></p>
								<p style="color:gray;">La Villete 75019 Paris</p>
							</div>
						</a>
					</div>
				</li>
				<li data-role="list-divider" style="
					border: 0px solid; 
					background:white;
					border-bottom: 1px solid #e4e4e4;
					padding-top:3%;
					padding-bottom:1%;">
					<div class="ui-btn-inner ui-li ui-corner-top" style="
						margin:0px;
						padding:0em 0px;
						border: 0px solid;
						border-top-left-radius: 0em;
						border-top-right-radius: 0em; 
						background:white;
						">
						<a href="propositionsPersonnes.php" style="
							text-decoration:none; 
							color:black; vertical-align:top;
							text-shadow: 0px 0px 0px rgb(37, 79, 122);">
							<div style="display:inline-block; margin:0px; padding:0px; margin-right:3%;">
								<img class="photoProfil" src="images/photo_film7.png" alt="image_logo" style="
										width:50px;
										padding-bottom:0px;"/>
							</div>
							<div style="display:inline-block; 
								vertical-align:top;
								font-family:Lucida Console;
								font-style:normal;" >
								<p><h3 style="font-weight:normal; font-size:15px;">Méa Culpa</h3></p>
								<p style="color:gray;">La Villete 75019 Paris</p>
							</div>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	<script type="text/javascript">
		/*$(function(){
			/*$(".page9 .menu").hide();
			$(".page1 .aller_menu").click(function(){
				if ($(".page9 .menu").is(":hidden")) {
					$(".page9 .menu").show();
				} else {
					$(".page9 .menu").hide();
				}
			});
			$(".allerversSeances").swiperight(function() {
				alert("test");
                //$.mobile.changePage("#page1");
            });*/
			
			
			 // Bind the swipeleftHandler callback function to the swipe event on div.box
			/*$( ".allerversSeances" ).on( "swipeleft", swipeleftHandler );
			// Callback function references the event target and adds the 'swipeleft' class to it
			function swipeleftHandler( event ){
				alert("test");
				//$( event.target ).addClass( "swipeleft" );
			}
		});*/
	</script>
</body>
</html>