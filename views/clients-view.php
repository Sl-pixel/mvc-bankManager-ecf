<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">Gestion du clients</h2>

    <p><strong>Prénom : </strong> <?= $client->getName() ?></p>
    <p><strong>Nom : </strong> <?= $client->getLastName() ?></p>
    <p><strong>Email : </strong> <?= $client->getEmail() ?></p>
    <p><strong>Téléphone : </strong> <?= $client->getTelephone() ?></p>
    <p><strong>Adresse : </strong> <?= $client->getAddress() ?></p>
    <p><strong>Id client: </strong> <?= $client->getId() ?></p>

<br>

<a href="?action=editClient&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
<a onclick="return confirm('T’es sûr ?');" href="?action=deleteClient&id=<?= $client->getId() ?>" class="btn btn-dark btn-sm">Supprimer</a>

<br>
<br>


<a href="?action=viewClientList">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; ?>
