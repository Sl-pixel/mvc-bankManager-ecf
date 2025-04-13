<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">Créer un nouveau contrat</h2>

<form action="?action=storeContract" method="POST">
    <div class="mb-3">
        <label for="type" class="form-label">Type de contrat :</label>
        <select name="type" id="type" class="form-control" required>
            <option value="">-- Sélectionnez un type de contrat --</option>
            <option value="Assurance Vie">Assurance Vie</option>
            <option value="Assurance Habitation">Assurance Habitation</option>
            <option value="Crédit Immobilier">Crédit Immobilier</option>
            <option value="Crédit à la Consommation">Crédit à la Consommation</option>
            <option value="Compte Épargne Logement (CEL)">Compte Épargne Logement (CEL)</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Montant souscrit (en euros) :</label>
        <input type="number" class="form-control" id="amount" name="amount" step="0.10" required>
    </div>
    <div class="mb-3">
        <label for="duration" class="form-label">Durée (en mois) :</label>
        <input type="number" class="form-control" id="duration" name="duration" required>
    </div>
    <div class="mb-3">
        <label for="clientId" class="form-label">ID Client :</label>
        <input type="number" class="form-control" id="clientId" name="clientId" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?action=viewContractList">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; ?>
