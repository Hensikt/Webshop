<?php

/**
 * List all shirts with a link to edit
 */

try {
  require "../config.php";
  require "../common.php";

  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM shirts";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();

} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessvoorraad();
}
?>

<?php require "Templates/header.php"; ?>

<h2>Update shirts</h2>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Soort</th>
      <th>Maat</th>
      <th>kleur</th>
      <th>Voorraad</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["Soort"]); ?></td>
      <td><?php echo escape($row["Maat"]); ?></td>
      <td><?php echo escape($row["Kleur"]); ?></td>
      <td><?php echo escape($row["Voorraad"]); ?></td>
      <td><a href="update-single.php?id=<?php echo escape($row["id"]); ?>">Edit</a></td>
      <td><a href="delete.php?id=<?php echo escape($row["id"]); ?>">Delete</a></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php">Back to home</a>
