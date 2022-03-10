<?php
			// DB CONNECTION
			$connectionsuccess = 'true';
			try
			{
				$db = new PDO('mysql:localhost;dbname=variations_entries;charset=utf8',
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