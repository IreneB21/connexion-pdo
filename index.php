<?php

require_once '_connec.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT firstname, lastname FROM friend";
$statement = $pdo->query($query);
$friendsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Friends List</title>
</head>

<body>
    <main>
        <section>
            <h1>Liste des Friends</h1>
            <?php foreach($friendsArray as $friend): ?>
                <p><?= $friend['firstname'] . ' ' . $friend['lastname']; ?></p>
            <?php endforeach; ?> 
        </section>

        <section>
            <h1>Ajoute un Friend</h1>
            <form action="process.php" method="post">
                    <label for="firstname">Prénom : </label>
                    <input type="text" id="firstname" name="firstname" maxlenght="45" required="true">
                </div>
                <div>
                    <label for="lastname">Nom : </label>
                    <input type="text" id="lastname" name="lastname" maxlenght="45" required="true">
                </div>
                <br>
                <button type="submit">Envoyer</button>
            </form>
            <br>
        </section>
    </main>
</body>

</html>
