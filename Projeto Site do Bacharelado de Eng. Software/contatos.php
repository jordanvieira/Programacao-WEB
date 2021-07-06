<?php
include "conexao.php";

// Cadastrando um registro:
if (isset($_POST["btCadastrar"])) {
    $codnome = $_POST["txtBusca"];
    $codemail = $_POST["email"];
    $codassunto = $_POST["assuntos"];
    $codtexto = $_POST["txttexto"];

    $sql = "INSERT INTO contato_mensagem (dsc_nome_completo, dsc_email, cod_assunto, desc_texto) "
        . "VALUES ('$codnome','$codemail','$codassunto', '$codtexto')";
    mysqli_query($conn, $sql);
}
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
    <script src="./js/newjs.js" type="text/javascript"></script>
    <title>Engenharia de Software</title>
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
                        <li><a class="aa" href="colegiado.php">Colegiado do curso</a></li>
                        <li><a class="aa" href="corpodocente.php">Corpo docente</a></li>
                        <li><a class="aa" href="corpoestru.php">Núcleo estruturante</a></li>
                        <li><a class="aa" href="estruturacampus.php">Estrutura</a></li>
                        <li><a class="aa" href="gradecurricular.php">Grade curricular</a></li>

                    </ul>
                </li>
                <li id="cont"><a class="a" href="#">Fale conosco</a></li>
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
    <div class="container">
        <section class="sessao4">
            <div class="form">
                <h1 id="capu2">Campus XX</h1>
                <hr>
                <h2 id="capus">Entre em contato</h2>

                <form id="formBusca" name="formBusca" method="post" action="" onsubmit="javascript: return BotaoBuscar();">
                    <input type="text" name="txtBusca" id="txtBusca" placeholder="Nome*" iautofocus required>
                    <input type="email" name="email" placeholder="E-mail*" id="email" required>
                    <div class="form-group">
                        <label for="assuntos">Assuntos</label>
                        <br>
                        <select name="assuntos" id="assuntos" class="form-control" required>
                            <option value="">....</option>
                            <option value="reclamação">Reclamação</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="Duvidas">Dúvidas</option>
                        </select>
                    </div>
                    <textarea id="txttexto" name="txttexto" placeholder="Mensagem*" required></textarea>
                    <div class="clear"></div>
                    <input type="submit" value="Cadastrar" id="btCadastrar" name="btCadastrar">
                </form>

            </div>
            <!--form-->

            <div class="map-wraper">
                <h2>Faça uma visita</h2>
                <hr>
                <h3>Endereço:</h3>
                <p>R. Pedro Porpino da Silva, 1181 - São José, <br>Castanhal - PA, 68745-000</p>
                <div class="map-wraper3">
                    <div class="map-wraper2">
                        <div class="map">
                            <iframe id='gmap_canvas' src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=R.%20Pedro%20Porpino%20da%20Silva,%201181,%20uepa%20Castanhal+()&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            <a href='http://maps-generator.com/pt'>Mapas de Google Gerador</a>
                        </div>
                    </div>
                    <!--map-wraper2-->
                </div>
                <!--map-wraper-3-->

            </div>
            <!--map-wraper-->
            <div class="clear"></div>
            <div class="contatos">
                <h2>Contatos</h2>
                <a href="https://www.uepa.br/" target="_blank">Site Uepa</a>
                <a href="https://www.uepa.br/pt-br/tags/ccnt" target="_blank">Site CCNT</a>
                <i class="fa fa-phone" aria-hidden="true"> (91) 3412 - 2800</i><br>
                <i class="fa fa-envelope-open" aria-hidden="true"> uepacastanhalofical@gmail.com</i>
            </div>
            <div class="redes">
                <h2>Redes Socias</h2>
                <a href="https://www.facebook.com/UepaOficial" target="_blank"><i class="fab fa-facebook-f"></i>
                    Facebook</a>
                <a href="https://www.instagram.com/uepaoficial/" target="_blank"><i class="fab fa-instagram"></i>
                    Instagram</a>
                <a href="https://twitter.com/uepa_pa" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
                <a href="https://www.flickr.com/photos/biuepa/albums" target="_blank"><i class="fab fa-flickr"></i>
                    Flickr</a>
            </div><!-- icon-social -->

        </section>
        <!--sessao4-->
    </div>
    <!--container-->

    <footer class="col-100 footer-2 footer-3">
        <!--Inicio footer-->
        <div class="content">
            <!--Inicio div container-->
            <div class="rodape">
                <!--Inicio rodape-->
                <div class="icon-social social-2">
                    <!--Inicio icon-social-->
                    <a href="https://www.facebook.com/UepaOficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/uepaoficial/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/uepa_pa" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.flickr.com/photos/biuepa/albums" target="_blank"><i class="fab fa-flickr"></i></a>
                </div><!-- icon-social -->
                <p>Copyright &copy; 2021 | Jordan Vieira | João Mariano | Igor Dantas</p>
            </div>
            <!--final rodape-->
        </div>
        <!--Final div container-->
    </footer>
    <!--final footer-->
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d7d7ec0859a86b6c28e68be1b5835c21b8b4c1a5'></script>
    <script src="js/mobile-navbar.js"></script>
</body>

</html>