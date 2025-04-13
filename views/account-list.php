<?php require_once __DIR__ . '/templates/header.php'; ?>
        
<h2 class="mb-4">Liste des comptes</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Rib</th>
            <th>Type de compte</th>
            <th>Solde</th>
            <th>Id client</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($accounts as $account): ?>
            <tr>
                <td><?= $account->getId(); ?></td>
                <td><a href="?action=viewAccount&id=<?= $account->getId() ?>"><?= $account->getRib(); ?></a></td>
                <td><?= $account->getType(); ?></td>
                <td><?= $account->getSolde(); ?></td>
                <td><?= $account->getClientId(); ?></td>
                <td>
                    <a href="?action=viewAccount&id=<?= $account->getId() ?>" class="btn btn-primary btn-sm">Voir</a>
                    <a href="?action=editAccount&id=<?= $account->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=deleteAccount&id=<?= $account->getId() ?>" class="btn btn-dark btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once __DIR__ . '/templates/footer.php'; 
