<?php
/**
 * Récupération de la date du jour de la demande
 *
 * Format: 2014-02-12
 *
 */
$date = date('Y-m-d') ;
?>
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
				<a href="contact.php">
					<img src="images/bulle.png" alt="logo_menu" style="width:35px; height:35px;"/>
				</a>
			</div>
		</div>
		<div data-role="content" class="ui-content" data-theme="c" style="padding:0px; background:white;">
			<div class="menu" data-theme="c"></div>
			<ul data-role="listview" data-inset="true" style="margin: 0em 0px;" class="allerversSeances">
                <?php
                $chooseTheater = 'C2954';
                //                $chooseTheater = $_POST['chooseTheater'];
                // Charger le fichier.
                require_once "api-allocine/api-allocine-helper.php";

                // Créer un objet AlloHelper.
                $allohelper = new AlloHelper;

                /**
                 *  Récuperation des titres des films actuellement à l'affiche
                 */

                $theater = $allohelper -> showtimesByTheaters($chooseTheater,$date);
                /**
                 *  Récuperation des titres des films de la liste de la semaine
                 */

                $theater = $theater['theaterShowtimes'][0];
//                echo "<h1>Votre Cinéma : ".utf8_encode($theater['place']['theater']['name'])."</h1>";

                $movies = $theater['movieShowtimes'];

                foreach($movies as $movie){
                    $movieTitle = utf8_encode($movie['onShow']['movie']['title']);
                    $poster = $movie['onShow']['movie']['poster']['href'];
                    $real = utf8_encode($movie['onShow']['movie']['castingShort']['directors']);
                    if(isset($movie['onShow']['movie']['castingShort']['actors'])){
                        $actors = utf8_encode($movie['onShow']['movie']['castingShort']['actors']);
                    }
                    $duree = date('g\hi', mktime(0, 0, $movie['onShow']['movie']['runtime'], 0, 0, 0));
                    $genre = utf8_encode($movie['onShow']['movie']['genre'][0]['$']);
                    $releaseYear = str_split($movie['onShow']['movie']['release']['releaseDate'],4);
                    ?>
                    <li data-role="list-divider" style="
						border: 0px solid; 
						background:white;
						border-bottom: 1px solid #e4e4e4;
						padding-top:3%;
						padding-bottom:1%;">
                        <a href="propositionsPersonnes.php" style="text-decoration:none; color:black; vertical-align:top;">
                            <div style="display:inline-block; margin:0px; padding:0px">
                                <img src="<?php echo $poster; ?>" alt='Affiche <?php echo $movieTitle; ?>' style='height:50px'/>
                            </div>
                            <div style="display:inline-block; vertical-align:top;" class="allerversSeances" >

                                <?php                   if($movie['version']['original'] == 'true'){?>
                                    <p><h3><?php echo $movieTitle; ?> - VO</h3></p><?php
                                }elseif($movie['version']['original'] == 'false' || $movie['version']['$'] == 'Français'){?>
                                    <p><h3><?php echo $movieTitle; ?> - VF</h3></p><?php
                                }?>
                                <?php
                                if(isset($actors)){?>
                                    <p><?php echo $actors; ?></p>
                                <?php
                                }
                                ?>
                                <p><?php echo $duree." - ".$genre; ?></p>
                                <p><?php echo $releaseYear[0]; ?></p>
                            </div>
                        </a>
                    </li>

                <?php
                }
                ?>


            </ul>
		</div>
	</div>
</body>
</html>