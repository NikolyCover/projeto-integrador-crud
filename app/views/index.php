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
        <?php #foreach($bps as $bp): ?>
            <div class="bp">
                <h1>title - number</h1>
                <h3>type</h3>
                <h3>date</h3>
                <h3>proposalHandler</h3>
                <div>
                    <p>company</p>
                    <p>cnpj</p>
                    <p>recipient</p>
                </div>
                <div>
                    <p>proposalPresentationText</p>
                    <p>scope</p>
                    <p>confidentialityText</p>
                    <p>tributesText</p>
                    <p>generalConditionText</p>
                    <p>finalResultsText</p>
                    <p>scheduleText</p>
                    <p></p>
                </div>
                <div>
                    <p>value</p>
                    <p>paymentType</p>
                </div>
                </br>
                <a href="../views/edit.php">Editar</a>
                <a href="">Apagar</a>
            </div>
        <?php #endforeach; ?>
    </main>

    <footer>

    </footer>
</body>
</html>