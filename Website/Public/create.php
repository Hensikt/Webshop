<?php

/**
 * Use an HTML form to create a new entry in the
 * T-shirt table.
 *
 */


if (isset($_POST['submit'])) {
	require "../config.php";
	require "../common.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);

		$new_user = array(
			"Soort" => $_POST['Soort'],
			"Maat"  => $_POST['Maat'],
			"Kleur"     => $_POST['Kleur'],
			"Voorraad"  => $_POST['Voorraad']
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"shirts",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);

		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}

}
?>

<?php require "Templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
	<blockquote><?php echo $_POST['Soort']; ?> successfully added.</blockquote>
<?php } ?>

<h2>Add a T-shirt</h2>

<form method="post">
	<label for="Soort">Soort T-shirt</label>
	<input type="text" name="Soort" id="Soort">
	<label for="Maat">Maat van T-shirt</label>
	<input type="text" name="Maat" id="Maat">
	<label for="Kleur">Kleur van T-shirt</label>
	<input type="text" name="Kleur" id="Kleur">
	<label for="Voorraad">Voorraad</label>
	<input type="text" name="Voorraad" id="Voorraad">
	<input type="submit" name="submit" value="Submit">
	<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
</form>

<a href="index.php">Back to home</a>

<?php require "Templates/footer.php"; ?>
