<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2>Créer un nouveau compte</h2>

<form action="?action=storeAccount" method="POST">
    <div>
        <label for="rib">RIB :</label>
        <input type="text" id="rib" name="rib" required>
    </div>
    <div>
        <label for="type">Type :</label>
        <select name="type" id="type" required>
            <option value="">-- Sélectionnez un type de compte --</option>
            <option value="Compte courant">Compte courant</option>
            <option value="Compte épargne">Compte épargne</option>
        </select>
    </div>
    <div>
        <label for="solde">Solde :</label>
        <textarea id="solde" name="solde" rows="1" required></textarea>
    </div>
    <div>
        <label for="clientId">Id client :</label>
        <textarea id="clientId" name="clientId" rows="1" required></textarea>
    </div>
    <button type="submit">Ajouter</button>
</form>

<a href="?action=viewAccountList">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; ?>

