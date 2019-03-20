<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

  include 'functions.php';
  include 'AfficherArticles.php';

  $id = $_GET["id"];
  if ($id == 0) {
    $user = getNewUser();
    $action = "CREATE";
    $libelle = "Creer";
  } else {
    $user = readUser($id);
    $action = "UPDATE";
    $libelle = "Mettre a jour";
  }
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <form action="createUpdate.php" method="get">
      <p>
        <a href="index.php">Liste des utilisateurs</a>

        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="hidden" name="action" value="<?php echo $action; ?>">

        <div>
          <label for="titre">Titre</label>
          <input type="text" id="titre" name="titre" value="<?php echo $user['titre']; ?>">
        </div>
        <div>
            <label for="description">Description</label>
          <input type="text" id="description" name="description" value="<?php echo $user['description']; ?>">
        </div>
        <div class="button">
          <button type="submit"><?php echo $libelle; ?></button>
        </div>
      </p>
    </form>
<br>

<?php if ($action!="CREATE") { ?>
  <form class="" action="createUpdate.php" method="get">
    <input type="hidden" name="action" value="DELETE">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <p>
      <div class="button">
        <button type="submit" name="button">Supprimer</button>

      </div>
    </p>
  </form>
<?php } ?>
  </body>
</html>
