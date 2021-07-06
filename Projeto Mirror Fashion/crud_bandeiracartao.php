<?php
include "conexao.php";

// Cadastrando ou Alterando um registro:
if (isset($_POST["BtCadastrar"])) {
    $codBandeira = $_POST["txtCodigoBandeiraCartao"];
    $nomBandeira = $_POST["txtNomeBandeiraCartao"];
    if ($_GET["Acao"]=="Cadastrar") {
        $sql = "INSERT INTO bandeira (cod_bandeira,dsc_bandeira) "
                . "VALUES ($codBandeira,'$nomBandeira')";
    }
    elseif ($_GET["Acao"]=="Alterar") {
        $sql = "UPDATE bandeira SET dsc_bandeira='$nomBandeira' "
            . "WHERE cod_bandeira=$codBandeira";
    }
    mysqli_query($conn, $sql);
}

// Excluindo um registro:
if (isset($_GET["CodExcluir"])) {
    $codBandeira=$_GET["CodExcluir"];
    $sql = "DELETE FROM bandeira WHERE cod_bandeira=$codBandeira";
    mysqli_query($conn, $sql);
}

// Selecionando dados de alteração:
if (isset($_GET["CodAlterar"])) {
    $cod=$_GET["CodAlterar"];
    $sql = "SELECT * FROM bandeira WHERE cod_bandeira=$cod";
    $resultAlterar = mysqli_query($conn, $sql);
    $rowAlterar = mysqli_fetch_assoc($resultAlterar);
}

// Select da tabela "bandeira"
$sql="SELECT `cod_bandeira`, `dsc_bandeira` FROM `bandeira`";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Tabela Bandeira</h1>
        
        <form id="formCadastro" name="formCadastro" method="post" action="crud_bandeiracartao.php?Acao=<?php if (isset($_GET["CodAlterar"])) { echo "Alterar"; } else { echo "Cadastrar"; } ?>" >
            Código: <input type="number" id="txtCodigoBandeiraCartao" name="txtCodigoBandeiraCartao" value="<?php if (isset($_GET["CodAlterar"])) { echo $rowAlterar["cod_bandeira"]; } ?>" <?php if (isset($_GET["CodAlterar"])) { echo "readonly"; } ?> />
            <br>
            Nome da Bandeira: <input type="text" id="txtNomeBandeiraCartao" name="txtNomeBandeiraCartao" value="<?php if (isset($_GET["CodAlterar"])) { echo $rowAlterar["dsc_bandeira"]; } ?>" />
            <br>
            <input type="submit" value="<?php if (isset($_GET["CodAlterar"])) { echo "Alterar"; } else { echo "Cadastrar"; } ?>" id="BtCadastrar" name="BtCadastrar" />
        </form>
        
        
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <strong>Código</strong>
                </div>
                <div class="col-sm-4">
                    <strong>Nome da Bandeira</strong>
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div> <!-- Fim da Linha -->
        <?php
        $i=0;
        while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="row" <?php if ($i % 2 == 0) echo("style=\"background-color: #999999\""); ?>>
                <div class="col-sm-2">
                    <?php echo($row["cod_bandeira"]); ?>
                </div>
                <div class="col-sm-4">
                    <?php echo($row["dsc_bandeira"]); ?>
                </div>
                <div class="col-sm-3">
                    <a href="crud_bandeiracartao.php?CodAlterar=<?php echo($row["cod_bandeira"]); ?>">Alterar</a>
                </div>
                <div class="col-sm-3">
                    <a href="crud_bandeiracartao.php?CodExcluir=<?php echo($row["cod_bandeira"]); ?>">Excluir</a>
                </div>
            </div> <!-- Fim da Linha -->
        <?php 
        $i++;
        } ?>
        </div> <!-- Fim do conteiner -->            
    </body>
</html>
