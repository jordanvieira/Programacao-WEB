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
                <li><a class="a" href="#">Início</a></li>
                <li><a class="a" href="#">Sobre o curso</a>
                    <ul class="list">
                        <li><a class="aa" href="colegiado.php">Colegiado do curso</a></li>
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
    <article class="container">
        <h1 class="curso-h1">Sobre o curso</h1>
        <p class="curso-p">
            A engenharia de software é a área da computação responsável pelo estabelecimento de técnicas e práticas
            para
            o
            desenvolvimento de software cobrindo uma ampla área de aplicações, tais como engenharia de software
            corporativo,
            sistemas e portais web, aplicações em dispositivos móveis e computação na nuvem
            O curso de Engenharia de Software aborda a computação voltada para a especificação, desenvolvimento,
            manutenção e criação de softwares. Com foco na organização, produtividade e qualidade, nossos alunos
            aprendem a aplicar novas tecnologias e a gerenciar projetos na área. O mercado de softwares está entre
            os
            setores de tecnologia dos quais o Brasil é o 1º investidor da América Latina e o 9º no ranking mundial.
        </p>
    </article>

    <div class="container">
        <input class="input"type="checkbox" name="c" id="c1">
        <label for="c1" class="bnt-sobre"></label>
        <div class="conteudo">
            <p> Duração mínima de 4 anos, o curso de Engenharia de Software se dedica a ensinar o
                desenvolvimento de softwares e programas computacionais. Os alunos são capacitados a desenhar e testar
                novos
                programas, além de treinar a manutenção e revisão destes programas. Nossos alunos do curso de Engenharia
                de
                Software também são apresentados ao universo da criação de aplicativos, jogos e plataformas digitais
                para
                atividades educacionais. Eles também aprendem sobre sistemas específicos, como os destinados às áreas
                médica e bancária.
            </p>
        </div>
    </div>

    <div class="container contente-logo">
        <ul>
            <li class="svg"><img src="./img/icone-duracao.svg" alt="duração">
                <p>Duração <span> <strong>4 anos</strong> </span> </p>
            </li>
            <li class="svg">
                <img src="./img/icone-modalidade.svg" alt="duração" />
                <p>Modalidade<span> <strong>Presencial</strong> </span> </p>
            </li>
            <li class="svg">
                <img src="./img/icone-certificado.svg" alt="duração" />
                <p>Certificação<span> <strong>Bacharelado</strong> </span> </p>
            </li>
        </ul>
    </div>

    <br><br><br>

    <div class="prof container">
        <h2>
            Mercado de trabalho
        </h2>

    </div>

    <div class="col-100">

        <div class="card">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <img src="./img/home1.jpg" />
                    </div>
                    <div class="back">
                        <img src="./img/home1txt.jpg" />
                    </div>
                </div>
            </div>
            <h4>
                Engenheiro de Software
            </h4>
        </div>

        <div class="card">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <img src="./img/home2.jpg" />
                    </div>
                    <div class="back">
                        <img src="./img/home2txt.jpg" />
                    </div>
                </div>
            </div>
            <h4>
                Desenvolvedor de Softwares
            </h4>
        </div>

        <div class="card">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <img src="./img/home3.jpg" />
                    </div>
                    <div class="back">
                        <img src="./img/home3txt.jpg" />
                    </div>
                </div>
            </div>
            <h4>
                Gerente de Projetos
            </h4>
        </div>

        <div class="card">
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                        <img src="./img/home4.jpg" />
                    </div>
                    <div class="back">
                        <img src="./img/home4txt.jpg" />
                    </div>
                </div>
            </div>
            <h4>
                Dev. de Banco de dados
            </h4>
        </div>

    </div>



    <footer class="col-100 footer-2">
        <!--Inicio footer-->
        <div class="content">
            <!--Inicio div container-->
            <div class="rodape">
                <!--Inicio rodape-->
                <div class="icon-social social-2">
                    <!--Inicio icon-social-->
                    <a href="https://www.facebook.com/UepaOficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/uepaoficial/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/uepa_pa" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://www.flickr.com/photos/biuepa/albums" target="_blank"><i
                            class="fab fa-flickr"></i></a>
                </div><!-- icon-social -->
                <p>Copyright &copy; 2021 | Jordan Vieira | João Mariano | Igor Dantas</p>
            </div>
            <!--final rodape-->
        </div>
        <!--Final div container-->
    </footer>
    <!--final footer-->

    <script src="js/mobile-navbar.js"></script>
</body>

</html>