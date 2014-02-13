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
				<li data-role="list-divider" id="allerversSeances">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film03.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" class="allerversSeances" >
							<p><h3>UGC Les Halles - Robocop</h3></p>
							<p><strong>Chatelet</strong> 75001</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film02.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<p><h3>MK2 - Jack et la mécanique du coeur</h3></p>
							<p><strong>La Villete</strong> 75019 Paris</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film01.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<p><h3>MK2 - L'île des Miam-mimaux</h3></p>
							<p><strong>La Villete</strong> 75019 Paris</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film6.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<p><h3>Gaumont - American Bluff</h3></p>
							<p><strong>Saint Denis</strong> 93000</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film6.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<p><h3>MK2 - American Bluff</h3></p>
							<p><strong>La Villete</strong> 75019 Paris</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="images/photo_film7.png" alt="image_logo" style="width:50px;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<p><h3>MK2 - Méa Culpa</h3></p>
							<p><strong>La Villete</strong> 75019 Paris</p>
						</div>
					</a>
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
			}*/
		});
	</script>
</body>
</html>