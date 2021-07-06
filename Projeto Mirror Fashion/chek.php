<?php
include "conexao.php";
// Cadastrando um registro:
if ($_POST["btCadastrar"]) {
    $codBandeira = $_POST["txtCodigoBandeira"];
    $nomBandeira = $_POST["txtnomeBandeira"];

    $sql = "INSERT INTO bandeira (cod_bandeira,dsc_bandeira) "
        . "VALUES ($codBandeira,'$nomBandeira')";
    mysqli_query($conn, $sql);
}
//select
$sql = "SELECT `cod_bandeira`, `dsc_bandeira` FROM `bandeira`";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <h1>Tabela Bandeira</h1>
    <div class="container">
        <form id="formcadastro" name="formcadastro" method="post" action="">
            Codigo:<input type="number" id="txtCodigoBandeira" name="txtCodigoBandeira" />
            <br>
            Nome:<input type="text" id="txtnomeBandeira" name="txtnomeBandeira" />
            <br>
            <input type="submit" value="Cadastrar" id="btCadastrar" name="btCadastrar" />
        </form>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <strong>Codigo</strong>
            </div>
            <div class="col-sm-4">
                <strong>Nome Bandeira</strong>
            </div>
            <div class="col-sm-3">
                <strong>Alterar</strong>
            </div>
            <div class="col-sm-3">
                <strong>Exluir</strong>
            </div>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <div class="row">
                <div class="col-sm-2">
                    <?php echo ($row["cod_bandeira"]); ?>
                </div>
                <div class="col-sm-4">
                    <?php echo ($row["dsc_bandeira"]); ?>
                </div>
                <div class="col-sm-3">
                    <strong>Alterar</strong>
                </div>
                <div class="col-sm-3">
                    <strong>Exluir</strong>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>