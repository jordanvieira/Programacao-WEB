<?php
include "conexao.php";

$sql = "SELECT `cod_bandeira`, `dsc_bandeira` FROM `bandeira`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/newjs.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Checkout Mirror Fashion</title>
</head>
<style>
    .form-control:invalid {
        border: 1px solid #cc0000;
    }
</style>


<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Sua compra</h2>
                    </div>
                    <div class="panel-body">
                        <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive">
                        <dl>
                            <dt>Produto</dt>
                            <dd>Fuzzy Cardigan</dd>

                            <dt>Cor</dt>
                            <dd>verde</dd>

                            <dt>Tamanho</dt>
                            <dd>40</dd>

                            <dt>Preço</dt>
                            <dd>R$ 129,00</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <form class="col-sm-8">
                <div class="row">
                    <fieldset class="col-md-6">
                        <legend>Dados pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>

                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required oninvalid="javascript:ValidEmail(this);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="col-md-6">
                        <legend>Cartão de crédito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>
                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                    <option value="<?php echo ($row["cod_bandeira"]); ?>"><?php echo ($row["dsc_bandeira"]); ?></option>
                                <?php

                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary btn-lg pull-right">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    Confirmar Pedido
                </button>
            </form>
        </div>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>