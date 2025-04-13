<?php require_once __DIR__ . '/templates/header.php'; ?>
<main>
        <div class="containerHome">
                <div class="box-container" onclick="redirectToAccountList()">
                        <div class="box">
                                <h2>Comptes : </h2>
                                <p> <?= isset($totals['accountCount']) ? $totals['accountCount'] : 'N/A' ?></p> 
                        </div>
                </div>
                <div class="box-container" onclick="redirectToClientList()">
                        <div class="box">
                                <h2>Clients  : </h2>
                                <p><?= isset($totals['clientCount']) ? $totals['clientCount'] : 'N/A' ?></p>
                        </div>
                </div>
                <div class="box-container" onclick="redirectToContractList()">
                        <div class="box">
                                <h2>Contrats : </h2>
                                <p><?= isset($totals['contractCount']) ? $totals['contractCount'] : 'N/A' ?></p>
                        </div>
                </div>
        </div>
</main>
<?php require_once __DIR__ . '/templates/footer.php'; ?>