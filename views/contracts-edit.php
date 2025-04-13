<?php require_once __DIR__ . '/templates/header.php'; ?>


<h2 class="mb-4">Modifier la fiche contrat</h2>

<form action="?action=updateContract" method="POST">
    <input type="hidden" name="id" value="<?= $contract->getContractId() ?>">
    <div class="mb-3">
        <label for="Id" class="form-label">Id du contrat :</label>
        <input readonly type="text" class="form-control" id="Id" name="Id" value="<?= $contract->getContractId() ?>" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type du contrat :</label>
        <select name="type" id="type" class="form-control"required>
            <option value="">-- Sélectionnez un type de contrat --</option>
            <option value="Assurance Vie">Assurance Vie</option>
            <option value="Assurance Habitation">Assurance Habitation</option>
            <option value="Crédit Immobilier">Crédit Immobilier</option>
            <option value="Crédit à la Consommation">Crédit à la Consommation</option>
            <option value="Compte Épargne Logement (CEL)">Compte Épargne Logement (CEL)</option>
        </select>

    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Montant :</label>
        <input type="text" class="form-control" id="amount" name="amount" value="<?= $contract->getContractAmount() ?>" required>
    </div>
    <div class="mb-3">
        <label for="duration" class="form-label">Durée :</label>
        <textarea class="form-control" id="duration" name="duration" rows="3" required><?= $contract->getContractDuration() ?></textarea>
    </div>
    <div class="mb-3">
        <label for="clientId" class="form-label">Durée :</label>
        <textarea readonly class="form-control" id="clientId" name="clientId" rows="3" required><?= $contract->getClientId() ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=viewContractList">Retour à la liste</a>
<script src="contractEdit.js"></script>


<?php require_once __DIR__ . '/templates/footer.php'; 