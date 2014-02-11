<!DOCTYPE html> 
<html>
<head>
	<title>DailyMov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="jquery-1.10.2.min"></script>
	<script src="jquery.mobile-1.4.0"></script>
</head>

<body>
	<div data-role="page" id="page1">
	<div data-role="header" id="header">
		<button><img alt="menu"/></button>
		<div id="nomAppli"><h1>DailyMov</h1></div>
		<button><img alt="tchat"/></button>
	</div>
	<div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">
			<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
			<li><a href="index.html">
			<h2>Stephen Weber</h2>
			<p><strong>You've been invited to a meeting at Filament Group in Boston, MA</strong></p>
			<p>Hey Stephen, if you're available at 10am tomorrow, we've got a meeting with the jQuery team.</p>
				<p class="ui-li-aside"><strong>6:24</strong>PM</p>
			</a></li>
			<li><a href="index.html">
			<h2>jQuery Team</h2>
			<p><strong>Boston Conference Planning</strong></p>
			<p>In preparation for the upcoming conference in Boston, we need to start gathering a list of sponsors and speakers.</p>
				<p class="ui-li-aside"><strong>9:18</strong>AM</p>
			</a></li>
			<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
			<li><a href="index.html">
			<h2>Avery Walker</h2>
			<p><strong>Re: Dinner Tonight</strong></p>
			<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait!</p>
				<p class="ui-li-aside"><strong>4:48</strong>PM</p>
			</a></li>
		</ul>
	</div>
	<!--<div data-role="footer">...</div>-->
	</div>
</body>
</html>