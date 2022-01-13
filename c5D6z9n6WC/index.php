<!--
.........................................................
.........................................................
....................*****************....................
...............******...............******...............
...........****...........................****...........
.........****.................................***........
......***.......................................***......
.....**...........***...............***...........**.....
...**...........*******...........*******..........***...
..**............*******...........*******............**..
.**.............*******...........*******.............**.
.**...............***...............***...............**.
**.....................................................**
**.......*.....................................*.......**
**......**.....................................**......**
.**...****.....................................****...**.
.**......**...................................**......**.
..**.......***.............................***.......**..
...***.......****.......................****.......***...
.....**.........******.............******.........**.....
......***............***************............***......
........****.................................****........
...........****...........................****...........
...............******...............******...............
....................*****************....................
.........................................................
...................................................................
Congrats! You found the easter egg on this page. Hope you like it!
...................................................................
This website's purpose is actually to record the user's behavior on websites. Don't spread the word!
-->
<!doctype html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="styles/main.css"/>
			<title>Web Survey</title>
			<style>
				@font-face{
					font-family: "miki";
					src: url("fonts/regular.otf") format("opentype");
				}
				@font-face{
					font-family: "miki_bold";
					src: url("fonts/bold.otf") format("opentype");
				}
				@font-face{
					font-family: miki_extra_bold;
					src: url("fonts/extrabold.otf");
				}
			</style>
		</head>
		<body>
			<!-- HEADER -->
			<header>
				<a class="title" href="https://www.shineonpoll.com">Shineon.</a>
				<h2> > </h2>
				<h2>poll name</h2>
			</header>

			<!-- CONNECTION TO THE DATABASE -->

			<?php
			$connectionsuccess = 'true';
			try
			{
				$db = new PDO('mysql:localhost;dbname=test;charset=utf8',
				'root',
				'root',
					array(
						PDO::ATTR_TIMEOUT => 3, // in seconds
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				)
				);
			}
			catch (Exception $e)
			{
					die('Error : ' . $e->getMessage());
					$connectionsuccess = 'false';
			}
			?>
			<?php 
				if(!$connectionsuccess){
				//CONNECTION UNSUCCESSFUL
				}else{
					//CHECK FOR PAGE NUMBER
					if(!isset($_POST['q'])){
						//MAINPAGE
						?>
							<form action="" method="POST">
							<button name="q" value="1">Start</button>
							</form>
						<?php
					}elseif($_POST['q'] == 1){
						// QUESTION 1
						?>

						<div class="choice1"></div>
						<div class="choice2"></div>

						<?php
					}elseif($_POST['q'] == 2){
						// QUESTION 2
						?>

						

						<?php
					}elseif($_POST['q'] == 3){
						// QUESTION 3
						?>

						

						<?php
					}elseif($_POST['q'] == 4){
						// QUESTION 4
						?>

						

						<?php
					}elseif($_POST['q'] == 5){
						// END SCREEN (5)
						?>

						

						<?php
					}else{
						header("Location: https://www.shineonpoll.com/c5D6z9n6WC/");
						exit();
					}

				}
			?>

		</body>
	</html>