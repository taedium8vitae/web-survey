<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=test;charset=utf8',
	'root',
	'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$sqlQuery = 'SELECT * FROM test_table';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['name']; ?></p>
<?php
}
?>