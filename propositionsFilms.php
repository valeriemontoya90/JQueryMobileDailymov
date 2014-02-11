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
		<div role="content" class="ui-content" data-theme="c" >
			<ul data-role="listview" data-inset="true">
				<!--<li> data-role="list-divider"
					<a href="#">
						<img class="photoProfil" src="Photo-profil.png" alt="image_logo" style="width:50%;" class="ui-li-has-thumb ui-shadow"/>
						<h3>Stephen Weber</h3>
						<p><strong>Homme</strong> 25 ans</p>
					</a>
				</li>-->
				<li data-role="list-divider">
					<a href="#" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="Photo-profil.png" alt="image_logo" style="width:50%;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<h3>Stephen Weber</h3>
							<p><strong>Homme</strong> 25 ans</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="#" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="Photo-profil.png" alt="image_logo" style="width:50%;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<h3>Stephen Weber</h3>
							<p><strong>Homme</strong> 25 ans</p>
						</div>
					</a>
				</li>
				<li data-role="list-divider">
					<a href="#" style="text-decoration:none; color:black; vertical-align:top;">
						<div style="display:inline-block; margin:0px; padding:0px">
							<img class="photoProfil" src="Photo-profil.png" alt="image_logo" style="width:50%;"/>
						</div>
						<div style="display:inline-block; vertical-align:top;" >
							<h3>Stephen Weber</h3>
							<p><strong>Homme</strong> 25 ans</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>