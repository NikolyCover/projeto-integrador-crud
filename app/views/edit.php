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
        <h1>Bp Generator</h1>
        <a href="../views/create.php">Editar proposta comercial</a>
    </header>
    <main>          
        <form action="../controllers/businessProposalController.php?action=update&id=<?= $bp->getId() ?>" method="POST">
            <div>
                <label>Título:</label>
                <input name="proposalTitle" type="text" value="<?= $bp->getProposalTitle() ?>"  required>
            </div>
            <div>
                <label>Número:</label>
                <input name="number" type="text" value="<?= $bp->getNumber() ?>" required>
            </div>
            <div>
                <label>Tipo de proposta comercial:</label>
                <input name="type" type="text" value="<?= $bp->getType() ?>" required>
            </div>
            <div>
                <label>Data:</label>
                <input name="date" type="date" value="<?= $bp->getDate() ?>" required>
            </div>
            <div>
                <label>Responsável pela proposta PTI:</label>
                <input name="proposalHandler" type="text" value="<?= $bp->getProposalHandler() ?>" required>
            </div>
            <div>
                <label>Empresa:</label>
                <input name="company" type="text" value="<?= $bp->getCompany() ?>" required>
            </div>
            <div>
                <label>Cnpj;</label>
                <input name="cnpj" type="text" value="<?= $bp->getCnpj() ?>" required>
            </div>
            <div>
                <label>Responsável da empresa:</label>
                <input name="recipient" type="text" value="<?= $bp->getRecipient() ?>" required>
            </div>
            <div>
                <label>Apresentação:</label>
                <textarea name="proposalPresentationText" rows="4" cols="128" required><?= $bp->getProposalPresentationText() ?></textarea>
            </div>
            <div>
                <label>Escopo:</label>
                <textarea name="scope" rows="4" cols="128" required><?= $bp->getScope() ?></textarea>
            </div>
            <div>
                <label>Confidencialidade:</label>
                <textarea name="confidentialityText" rows="4" cols="128" required><?= $bp->getConfidentialityText() ?></textarea>
            </div>
            <div>
                <label>Tributos:</label>
                <textarea name="tributesText" rows="4" cols="128" required><?= $bp->getTributesText() ?></textarea>
            </div>
            <div>
                <label>Condições gerais:</label>
                <textarea name="generalConditionText" rows="4" cols="128" required><?= $bp->getGeneralConditionText() ?></textarea>
            </div>
            <div>
                <label>Resultados finais:</label>
                <textarea name="finalResultsText" rows="4" cols="128" required><?= $bp->getFinalResultsText() ?></textarea>
            </div>
            <div>
                <label>Cronograma:</label>
                <textarea name="scheduleText" rows="4" cols="128"  required><?= $bp->getScheduleText() ?></textarea>
            </div>
            <div>
                <label>Valor:</label>
                <input name="value" type="number" value="<?= $bp->getValue() ?>" required>
            </div>
            <div>
                <label>Tipo de pagamento:</label>
                <input name="paymentType" type="text" value="<?= $bp->getPaymentType() ?>" required>
            </div>
            <button type="submit">Atualizar</button>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>