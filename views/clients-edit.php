<?php require_once __DIR__ . '/templates/header.php'; ?>


<h2 class="mb-4">Modifier la fiche client</h2>

<form action="?action=updateClient" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $client->getName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $client->getLastName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <textarea class="form-control" id="email" name="email" rows="3" required><?= $client->getEmail() ?></textarea>
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone :</label>
        <textarea class="form-control" id="telephone" name="telephone" rows="3" required><?= $client->getTelephone() ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Addresse :</label>
        <textarea class="form-control" id="address" name="address" rows="3" required><?= $client->getAddress() ?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; 