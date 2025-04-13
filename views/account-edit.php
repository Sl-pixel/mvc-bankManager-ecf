<?php require_once __DIR__ . '/templates/header.php'; ?>


<h2 class="mb-4">Modifier les informations du compte</h2>

<form action="?action=updateAccount" method="POST">
    <input type="hidden" name="id" value="<?= $account->getId() ?>">
    <div class="mb-3">
        <label for="rib" class="form-label">Id :</label>
        <input readonly type="text" class="form-control" id="rib" name="rib" value="<?= $account->getId() ?>" required>
    </div>
    <div class="mb-3">
        <label for="rib" class="form-label">RIB :</label>
        <input type="text" class="form-control" id="rib" name="rib" value="<?= $account->getRib() ?>" required>
    </div>
    <div class="mb-3">
    <label for="type" class="form-label">Type :</label>
    <select name="type" id="type" class="form-control" required>
            <option value="">-- Sélectionnez un type de compte --</option>
            <option value="Compte courant">Compte courant</option>
            <option value="Compte épargne">Compte épargne</option>
    </select>
    </div>
    <div class="mb-3">
        <label for="solde" class="form-label">Solde :</label>
        <textarea class="form-control" id="solde" name="solde" rows="3" required><?= $account->getSolde() ?></textarea>
    </div>
    <div class="mb-3">
        <label for="clientId" class="form-label">Id client :</label>
        <textarea readonly class="form-control" id="clientId" name="clientId" rows="1" required><?= $account->getClientId() ?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=viewAccountList">Retour à la liste</a>



<?php require_once __DIR__ . '/templates/footer.php'; 