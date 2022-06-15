<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bp Generator</title>
</head>
<body>
    <header>
        <h1>Bp Generator</h1>
        <a href="../views/create.php">Editar proposta comercial</a>
    </header>
    <main>

        <form action="../controllers/businessProposalController.php?action=update" method="POST">
            <div>
                <label>Título:</label>
                <input name="proposalTitle" type="text" value=<?= "a"; ?> required>
            </div>
            <div>
                <label>Número:</label>
                <input name="number" type="text" required>
            </div>
            <div>
                <label>Tipo de proposta comercial:</label>
                <input name="type" type="text" required>
            </div>
            <div>
                <label>Data:</label>
                <input name="date" type="date" required>
            </div>
            <div>
                <label>Responsável pela proposta PTI:</label>
                <input name="proposalHandler" type="text" required>
            </div>
            <div>
                <label>Empresa:</label>
                <input name="company" type="text" required>
            </div>
            <div>
                <label>Cnpj;</label>
                <input name="cnpj" type="text" required>
            </div>
            <div>
                <label>Responsável da empresa:</label>
                <input name="recipient" type="text" required>
            </div>
            <div>
                <label>Apresentação:</label>
                <textarea name="proposalPresentationText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Escopo:</label>
                <textarea name="scope" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Confidencialidade:</label>
                <textarea name="confidentialityText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Tributos:</label>
                <textarea name="tributesText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Condições gerais:</label>
                <textarea name="generalConditionText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Resultados finais:</label>
                <textarea name="finalResultsText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Resultados finais:</label>
                <textarea name="finalResultsText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Cronograma:</label>
                <textarea name="scheduleText" rows="4" cols="128" required></textarea>
            </div>
            <div>
                <label>Valor:</label>
                <input name="value" type="number" required>
            </div>
            <div>
                <label>Tipo de pagamento:</label>
                <input name="paymentType" type="text" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>