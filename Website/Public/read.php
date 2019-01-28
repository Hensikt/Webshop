<?php

/**
 * Function to query information based on
 * a parameter: in this case, soort.
 *
 */

if (isset($_POST['submit'])) {
	try {
		require "../config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT *
						FROM shirts
						WHERE Soort = :Soort";

		$soort = $_POST['Soort'];

		$statement = $connection->prepare($sql);
		$statement->bindParam(':Soort', $soort, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>
<?php require "Templates/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
	if ($result && $statement->rowCount() > 0) { ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Soort</th>
					<th>Maat</th>
					<th>Kleur</th>
					<th>Voorraad</th>
				</tr>
			</thead>
			<tbody>
	<?php foreach ($result as $row) { ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["Soort"]); ?></td>
				<td><?php echo escape($row["Maat"]); ?></td>
				<td><?php echo escape($row["Kleur"]); ?></td>
				<td><?php echo escape($row["Voorraad"]); ?></td>
			</tr>
		<?php } ?>
			</tbody>
	</table>
	<?php } else { ?>
		<blockquote>No results found for <?php echo escape($_POST['Soort']); ?>.</blockquote>
	<?php }
} ?>

<h2>Find user based on soort</h2>

<form method="post">
	<label for="Soort">soort</label>
	<input type="text" id="Soort" name="Soort">
	<input type="submit" name="submit" value="View Results">
	<input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
</form>

<a href="index.php">Back to home</a>

<?php require "Templates/footer.php"; ?>
