<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../views/styles.css">
    <title>Bp Generator</title>
</head>
<body>
    <header>
        <h1>Generator</h1>
        <a href="../views/create.php">Criar proposta comercial</a>
    </header>

    <main>
        <?php foreach($bps as $bp): ?>
            <div class="bp">
                <h1><?= $bp['proposalTitle'] ?> - <?= $bp['number'] ?></h1>
                <h3><?= $bp['type'] ?></h3>
                <h3><?= $bp['date'] ?></h3>
                <h3><?= $bp['proposalHandler'] ?></h3>
                <div>
                    <p><?= $bp['company'] ?></p>
                    <p><?= $bp['cnpj'] ?></p>
                    <p><?= $bp['recipient'] ?></p>
                </div>
                <div>
                    <p><?= $bp['proposalPresentationText'] ?></p>
                    <p><?= $bp['scope'] ?></p>
                    <p><?= $bp['confidentialityText'] ?></p>
                    <p><?= $bp['tributesText'] ?></p>
                    <p><?= $bp['generalConditionText'] ?></p>
                    <p><?= $bp['finalResultsText'] ?></p>
                    <p><?= $bp['scheduleText'] ?></p>
                </div>
                <div>
                    <p><?= $bp['value'] ?></p>
                    <p><?= $bp['paymentType'] ?></p>
                </div>
                </br>
                <a href="../views/edit.php">Editar</a>
                <a href="">Apagar</a>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>

    </footer>
</body>
</html>