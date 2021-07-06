<?php
include 'conexao.php';


// Excluindo um registro:
if (isset($_GET["CodExcluir"])) {
    $cod=$_GET["CodExcluir"];
    $sql = "DELETE FROM contato_mensagem WHERE id=$cod";
    mysqli_query($conn, $sql);
}

// Select da tabela "bandeira"
$sql = "SELECT `id`,`dsc_nome_completo`, `dsc_email`,`cod_assunto`,`desc_texto` FROM `contato_mensagem`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/brasaouepa1.ico" />
    <title>Painel</title>
</head>

<body>
<header>
        <nav>
            <a class="logo" href="index.php">Engenharia de Software</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a class="a" href="index.php">Início</a></li>
                <li><a class="a" href="#">Sobre o curso</a>
                    <ul class="list">
                        <li><a class="aa" href="#">Colegiado do curso</a></li>
                        <li><a class="aa" href="corpodocente.php">Corpo docente</a></li>
                        <li><a class="aa" href="corpoestru.php">Núcleo estruturante</a></li>
                        <li><a class="aa" href="estruturacampus.php">Estrutura</a></li>
                        <li><a class="aa" href="gradecurricular.php">Grade curricular</a></li>

                    </ul>
                </li>
                <li id="cont"><a class="a" href="contatos.php">Fale conosco</a></li>
            </ul>
            <div class="icon-social social">
                <a href="https://www.facebook.com/UepaOficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/uepaoficial/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/uepa_pa" target="_blank"><i class="fab fa-twitter" ></i></a>
                <a href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                <a href="https://www.flickr.com/photos/biuepa/albums" target="_blank"><i class="fab fa-flickr"></i></a>
            </div><!-- icon-social -->
        </nav>
    </header>
    <!--header-->
    <article class="container-fluid">
        <h2 class="grade">Painel Administrativo</h2>
        <div class="content2">
            <table class="rTable">

                <thead>
                <th id="nometab">
                        ID
                    </th>
                    <th id="nometab">
                        nome
                    </th>
                    <th id="nometab">
                        E-mail
                    </th>
                    <th id="nometab">
                        Assunto
                    </th>
                    <th id="nometab">
                        Texto
                    </th>
                    <th id="nometab">
                        Excluir
                    </th>
                    
                </thead>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tbody>
                        <tr class="itenstab">
                            <td><?php echo($row["id"]); ?></td>
                            <td><?php echo ($row["dsc_nome_completo"]); ?></td>
                            <td><?php echo($row["dsc_email"]); ?></td>
                            <td><?php echo($row["cod_assunto"]); ?></td>
                            <td><?php echo($row["desc_texto"]); ?></td>
                            <td><a href="admin.php?CodExcluir=<?php echo($row["id"]); ?>"><input type="submit" value="Excluir"id="CodExcluir" name="CodExcluir" /></a></td>
                        </tr>
                    </tbody>
                <?php
                    $i++;
                } ?>
            </table>
        </div>
    </article> <!-- final  article (container)-->
                
    <script src="js/mobile-navbar.js"></script>
</body>

</html>