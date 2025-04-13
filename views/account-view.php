<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">Gestion du compte</h2>

    <p><strong>Rib : </strong> <?= $account->getRib() ?></p>
    <p><strong>Type : </strong> <?= $account->getType() ?></p>
    <p><strong>Solde : </strong> <?= $account->getSolde() ?></p>
    <p><strong>Id client : </strong> <?= $account->getClientId() ?></p>
    <p><strong>Id Compte : </strong> <?= $account->getId() ?></p>

<br>

<a href="?action=editAccount&id=<?= $account->getId() ?>">Modifier</a>
<a onclick="return confirm('T’es sûr ?');" href="?action=deleteClient&id=<?= $account->getId() ?>">Supprimer</a>

<br>
<br>

<a href="?action=viewAccountList">Retour à la liste</a>


<?php require_once __DIR__  . '/templates/footer.php'; ?>