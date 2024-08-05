<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/checkout.css">
    <title>Checkout Mirror Fashion</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="logo da Mirror Fashion"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Ajuda</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Perguntas frequentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Entre em contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima Escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efectivar a compra.
            </p>
            <div class="card">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-heading">
                            <h2 class="card-title">Sua compra</h2>
                        </div>

                        <div class="card-body">
                            <img src="img/Produtos/foto2-<?= $_POST["cor"] ?>.png" class="img-thumnail img-fluid"
                                alt="Imagem do artigo">
                            <dl>
                                <dt>Produto</dt>
                                <dd><?= $_POST['nome']?></dd>
                                <dt>Cor</dt>
                                <dd><?= $_POST['cor']?></dd>

                                <dt>Tamanho</dt>
                                <dd ><?= $_POST['tamanho']?></dd>

                                <dt>Preço</dt>
                                <dd id="preco"><?= $_POST['preco']?> R$</dd>
                            </dl>
                            <div class="form-group">
                                <label for="qt">Quantidade</label>
                                <input type="number" id="qt" min="1" max="99" value="1">
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <output for="qt valor" id="total" class="form-control"><?=$_POST['preco']?></output>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <form action="">
                            <fieldset>
                                <legend>Dados pessoais</legend>
                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" name="nome" id="nome" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group"><span class="input-group-text">@</span>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="email@exemplo.com" required>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control"
                                        placeholder="000.000.000-00" required>

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="spam" id="spam" value="sim" checked>
                                        Quero receber spam da Mirror Fashion
                                    </label>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Cartão de crédito</legend>
                                <div class="form-group">
                                    <label for="numero-do-cartao">Número-CVV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                        <option value="master">MasterCard</option>
                                        <option value="visa">VISA</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" id="validade-cartao"
                                        name="validade-cartao">
                                </div>

                                <div class="submit-button">
                                    <button type="submit" class="btn btn-primary  float-end">

                                        Confirmar Pedido
                                    </button>
                                </div>
                            </fieldset>


                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        <script src="./js/converterMoeda.js"></script>
        <script src="./js/total.js"></script>
</body>

</html>