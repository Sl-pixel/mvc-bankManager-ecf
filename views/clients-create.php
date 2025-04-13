<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">Créer une nouvelle fiche client</h2>

<form action="?action=storeClient" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <textarea class="form-control" id="email" name="email" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone :</label>
        <textarea class="form-control" id="telephone" name="telephone" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Addresse :</label>
        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?action=viewClientList">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; 