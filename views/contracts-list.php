<?php require_once __DIR__ . '../templates/header.php'; ?>
        
<h2 class="mb-4">Liste des contrats</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID contrat</th>
            <th>Type du contrat</th>
            <th>Montant</th>
            <th>Durée</th>
            <th>ID client</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($contracts as $contract): ?>

            <tr>

                <td><?= $contract->getContractId(); ?></td>
                <td><a href="?action=viewContrat&id=<?= $contract->getContractId() ?>"><?= $contract->getContractType(); ?></a></td>
                <td><?= $contract->getContractAmount(); ?></td>
                <td><?= $contract->getContractDuration(); ?></td>
                <td><?= $contract->getClientId(); ?></td>
                <td>
                    <a href="?action=viewContract&id=<?= $contract->getContractId() ?>" class="btn btn-primary btn-sm">Voir</a>
                    <a href="?action=editContract&id=<?= $contract->getContractId() ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=deleteContract&id=<?= $contract->getContractId() ?>" class="btn btn-dark btn-sm">Supprimer</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once __DIR__ . '../templates/footer.php'; 
