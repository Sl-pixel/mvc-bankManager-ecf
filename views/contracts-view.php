<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2>Gestion du contrat</h2>

    <p><strong>Type du contrat : </strong> <?= $contract->getContractType() ?></p>
    <p><strong>Montant : </strong> <?= $contract->getContractAmount() ?></p>
    <p><strong>Durée : </strong> <?= $contract->getContractDuration() ?></p>
    <p><strong>Id client : </strong> <?= $contract->getClientId() ?></p>
    <p><strong>Id contrat : </strong> <?= $contract->getContractId() ?></p>

<br>
<a href="?action=editContract&id=<?= $contract->getContractId() ?>" class="btn btn-warning btn-sm">Modifier</a>
<a onclick="return confirm('T’es sûr ?');" href="?action=deleteContract&id=<?= $contract->getContractId() ?>" class="btn btn-dark btn-sm">Supprimer</a>

<br>

<a href="?action=viewContractList">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; ?>