<?php require_once __DIR__ . '/templates/header.php'; ?>
        
<h2 class="mb-4">Liste des clients</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Mail</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>
            <tr>
                <td><?= $client->getId(); ?></td>
                <td><a href="?action=viewClient&id=<?= $client->getId() ?>"><?= $client->getName(); ?></a></td>
                <td><?= $client->getLastName(); ?></td>
                <td><?= $client->getEmail(); ?></td>
                <td><?= $client->getTelephone(); ?></td>
                <td><?= $client->getAddress(); ?></td>
                <td>
                    <a href="?action=viewClient&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm">Voir</a>
                    <a href="?action=editClient&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=deleteClient&id=<?= $client->getId() ?>" class="btn btn-dark btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once __DIR__ . '/templates/footer.php'; 
