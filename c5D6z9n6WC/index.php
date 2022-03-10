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
			<title>Web Survey</title>
			<link rel="stylesheet" href="/styles/main.css"/>
		</head>
		<body>
			<header>
				<a class="title" href="https://www.shineonpoll.com">Shineon.</a>
				<h2> >> </h2>
				<h2>Poll Name</h2>
			</header>
			<?php
			// DB CONNECTION
			$connectionsuccess = 'true';
			try
			{
				$db = new PDO("mysql:localhost;dbname=poll;charset=utf8",
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
					if(!isset($_GET['q'])){
						//MAINPAGE
						$var1 = "404";

						$var_1_statement = $db->prepare('SELECT * FROM vars_nbs');
						$var_1_statement->execute();
						$var1_entries_nb = $var_1_statement->fetchAll();
						
						?>
							
							<form method="GET">
							<button name="q" value=<?php echo $var1; ?>>Start</button>
							</form>
						<?php
					}elseif($_GET['q'] == 1){
						// QUESTION 1
						?>
							<div>Question 1</div>
							<form method="GET">
								<button name="q" value="2">Choix 1</button>
								<button name="q" value="2">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 2){
						// QUESTION 2
						?>
							<div>Question 2</div>
							<form method="GET">
								<button name="q" value="3">Choix 1</button>
								<button name="q" value="3">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 3){
						// QUESTION 3
						?>
							<div>Question 3</div>
								<form method="GET">
									<button name="q" value="4">Choix 1</button>
									<button name="q" value="4">Choix 2</button>
								</form>
						<?php
					}elseif($_GET['q'] == 4){
						// QUESTION 4
						?>
							<div>Question 4</div>
							<form method="GET">
								<button name="q" value="5">Choix 1</button>
								<button name="q" value="5">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 5){
						// END SCREEN (5)
						?>
						<?php
					}elseif($_GET['q'] == 1){
						// QUESTION 1
						?>
							<div>Question 1</div>
							<form method="GET">
								<button name="q" value="2">Choix 1</button>
								<button name="q" value="2">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 2){
						// QUESTION 2
						?>
							<div>Question 2</div>
							<form method="GET">
								<button name="q" value="3">Choix 1</button>
								<button name="q" value="3">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 3){
						// QUESTION 3
						?>
							<div>Question 3</div>
								<form method="GET">
									<button name="q" value="4">Choix 1</button>
									<button name="q" value="4">Choix 2</button>
								</form>
						<?php
					}elseif($_GET['q'] == 4){
						// QUESTION 4
						?>
							<div>Question 4</div>
							<form method="GET">
								<button name="q" value="5">Choix 1</button>
								<button name="q" value="5">Choix 2</button>
							</form>
						<?php
					}elseif($_GET['q'] == 5){
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