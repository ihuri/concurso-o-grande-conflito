<?php
include 'db.php';

 $sql = 'select * from igrejas';
 $statement = $connection->prepare($sql);
 $statement->execute();

 $igrejas = $statement->fetchAll(PDO::FETCH_OBJ);

 $DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
 $hora = strval($DT->format("Hi"));
 $token = md5("chavedaaplicacao".$hora);

?>

<?php
/*
 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LfxQe8eAAAAAP17Uj3BozoPZcmXqXVQHscE6NmD';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        { ?>
            <div style="color: limegreen;"><b>Sua solicitação de contato foi enviada com sucesso.</b></div>
        <?php }
        else
        {?>
            <div style="color: red;"><b>A verificação do robô falhou, tente novamente..</b></div>
        <?php }
   }else{?>
       <div style="color: red;"><b>Por favor, faça a verificação do robô.</b></div>
   <?php }
 }
 */
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Concurso - O Grande Conflito APS</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/contdown.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Concurso - O Grande Conflito APS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Informações</a></li>
                    <li class="nav-item"><a class="nav-link" href="#subscription">Inscrição</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Prova</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    </br>
                    </br>
                    </br>
                </div>
            </div>
        </div>
    </header>
    <!-- Informações-->
    <section class="about-section text-center bg-black" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4 text-uppercase">O Grande Conflito a Resposta</h2>
                    <p class="text-white-50">
                    Um concurso pensado para o seu desenvolvimento espiritual e conhecimento dos eventos finais deste mundo. Participe com o seu grupo e vamos movimentar as Igrejas da Associação Paulista Sul neste movimento de leitura do livro "O Grande Conflito", de Ellen G. White.
                    </p>
                    <a class="btn btn-primary" href="#subscription">INSCREVA A SUA EQUIPE</a>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/ipad-grande-conflito.png" alt="..." />
        </div>
    </section>
    <!-- Contdown -->
    <section class="about-section text-center bg-black" id="contdown">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4 text-uppercase" id="headline">Primeira Prova EM</h2>
                </div>
                <div id="countdown" class="text-white">
                    <ul>
                        <li><span id="days"></span>Dias</li>
                        <li><span id="hours"></span>Horas</li>
                        <li><span id="minutes"></span>Minutos</li>
                        <li><span id="seconds"></span>Segundos</li>
                    </ul>
                </div>
                <div id="content" class="emoji">
                    <span>🥳</span>
                    <span>🎉</span>
                    <span>🧾</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Contdown -->
    <section class="about-section text-center bg-black" id="contdown">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4 text-uppercase" id="headline"><b>O Concurso</b></h2>
                </div>
                <iframe width="560" height="415" src="https://www.youtube.com/embed/U7UoDOsmyeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- Premiação -->
    <section class="about-section text-center" id="premiacao">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">Segundo Lugar</h4>
                            <br>
                            <h1 class="text-uppercase m-0"><b>3 MIL</b></h1>
                            <br>
                            <div class="small text-black-50">O valor é destinado ao uso exclusivo em departamentos de sua igreja. </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">Primeiro Lugar</h4>
                            <br>
                            <h1 class="text-uppercase m-0 font-max"><b>5 MIL</b></h1>
                            <br>
                            <div class="small text-black-50">O valor é destinado ao uso exclusivo em departamentos de sua igreja. </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">Terceiro Lugar</h4>
                            <br>
                            <h1 class="text-uppercase m-0"><b>1 MIL</b></h1>
                            <br>
                            <div class="small text-black-50">O valor é destinado ao uso exclusivo em departamentos de sua igreja. </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </div>
    </section>
    <!-- Inscrição-->
    <section class="projects-section bg-light" id="subscription">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-11">
                    <div class="featured-text text-lg-left">
                        <h3 class="page-section-heading text-center text-primary mb-0">Cadastro para o Concurso</h3>
                        <br>
                        <br>
                        <form action="insert.php" method="post" id="formID">
                        <input type="hidden" id="_token" name="_token" value="<?= $token; ?>">
                            <div class="col-md-812 col-lg-12 mb-5">
                                <div class="form-group">
                                    <label for="nome">Nome do Líder:</label>
                                    <input class="form-control" type="text" name="nome" id="nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp do Líder</label>
                                    <input class="form-control" type="tel" name="whatsapp" id="whatsapp" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do Líder</label>
                                    <input class="form-control" type="email" name="email" id="email" required>
                                </div>
                                <div class="form-group">                            
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <label for="grupo">Nome do seu Grupo:</label>
                                            <input class="form-control" type="grupo" name="grupo" id="grupo" required>
                                        </div>
                                        <div class="col-sm">
                                            <label for="igreja">Igreja do Grupo: </label>
                                            <select class="form-control" id="igreja" name="igreja" required>
                                                <option value="0">Selecione..</option>
                                                <?php
                                                    foreach ($igrejas as $key => $igreja) {
                                                        echo "<option value='".$igreja->nome."'>".$igreja->nome."</option>"; 
                                                    }  
                                                ?>
                                            </select>   
                                        </div>
                                        <div class="col-sm">
                                            <label for="qt">Quantos integrantes: </label>
                                            <select class="form-control" name="qt" id="children-qnt">
                                                <option value="0">Somente Eu</option>
                                                <option value="1">Eu e + 1</option>
                                                <option value="2">Eu e + 2</option>
                                                <option value="3">Eu e + 3</option>
                                                <option value="4">Eu e + 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                           
                            </div>

                                <br />
                                <div class="container">
                                    <div class="row" id="children"></div>
                                </div>
                                <!--<div class="g-recaptcha" data-sitekey="6LfxQe8eAAAAAPmCz3IEipC_gQxNnCpVNkJPVfyK"></div><br><br>-->
                                <div class="form-check">

                                    <input type="checkbox" class="form-check-input" id="aceiteTermo" name="aceiteTermo" value="on" required>
                                    <label class="form-check-label" for="exampleCheck1">Declaro que li e concordo com as normas deste <a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal1">Concurso</a>.</label>
                                </div>
                                <br />
                                <input type="submit" class="btn btn-primary mb-2" name="send" id="send" value="Cadastrar" disabled><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prova-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl col-lg">
                    <div id="embed-exam-501348">
                        Loading <a href="https://www.onlineexambuilder.com/pt/prova-teste/exam-501348">Prova teste</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Endereço</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">R. Paulino Vital de Morais, 333 - Capão Redondo, São Paulo - SP, 05855-000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telefone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">(11) 2128-1000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; TIAPS 2022</div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Regras para o Concurso Grande Conflito</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="http://marcusmarques.com.br/wp-content/uploads/2019/04/regras.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">1. O concurso “Grande Conflito a resposta” ultimará como base para consulta o livro “O Grande Conflito: acontecimentos que mudarão seu futuro”, da autora Ellen G. White Edição Condensada do ano de 2007.
                                    </p>
                                    <p class="mb-4">2. O concurso “Grande Conflito a reposta” é válido apenas em território da Associação Paulista Sul (APS) da Igreja Adventista do Sétimo Dia, não sendo permitida a inscrição de candidatos membros de outras regiões administrativas da Igreja Adventista.
                                    </p>
                                    <p class="mb-4">3. O Concurso “Grande Conflito a reposta” é destinado às crianças, adolescentes, jovens e adultos independente de qual religião pertença.
                                    </p>
                                    <p class="mb-4">4. O Concurso “Grande Conflito a resposta” está dividido em 5 provas, sendo 4 online e um presencial. As provas online estão divididas por capítulos conforme apresentado em seguida e a prova final que será presencial com os 20 grupos que alcançarem as melhores notas com o tema geral do livro.
                                    </p>
                                    <p class="mb-4">
                                        1⁰ prova - online: capítulos 1-10
                                    </p>
                                    <p class="mb-4">
                                        2⁰ prova - online: capítulos 11-21
                                    </p>
                                    <p class="mb-4">
                                        3⁰ prova - online: capítulos 22-31
                                    </p>
                                    <p class="mb-4">
                                        4⁰ prova - online: capítulos 32-42
                                    </p>
                                    <p class="mb-4">
                                        5⁰ prova – presencial: Livro o todo 
                                    </p>

                                    <p class="mb-4">5. As inscrições para a participação nos Concursos serão online e gratuitas, permitidas somente até o início da primeira prova, exclusivamente pelo site https://concurso.paulistasul.org.br.
                                    </p>
                                    <p class="mb-4">6. O concurso será realizado por grupos de 3 a 5 pessoas, sem limitações de grupos por igreja;
                                    </p>
                                    <p class="mb-4">7. Os vencedores do concurso “Grande Conflito a reposta” estão sujeitos a ceder seu nome, imagem e som de voz à Associação Paulista Sul, de forma igualmente gratuita, com o propósito de reforço da mídia publicitária dos eventos em referência.
                                    </p>
                                    <p class="mb-4">8. O livro o Grande Conflito estará disponível na loja do Sels por um valor especial somente para os participantes do concurso;
                                    </p>
                                    <p class="mb-4">9. O Concurso “Grande Conflito a reposta” será realizada por meio de respostas a perguntas objetivas de múltipla escolha pela internet no site do Concurso.
                                    </p>
                                    <p class="mb-4">10. Os candidatados classificados em primeiro, segundo e terceiro lugar em pontos, receberão os seguintes prêmios, que devem ser direcionados para ações dos diversos mistérios da igreja local, sendo remunerados mediantes a apresentação de nota fiscal, pela seguinte ordem: 
                                    </p>
                                    <p class="mb-4">
                                        Primeiro lugar: R$ 5.000 (5 mil reais), Troféu de Campeão.
                                    </p>
                                    <p class="mb-4">
                                        Segundo lugar: R$ 3.000 (3 mil reais)
                                    </p>
                                    <p class="mb-4">
                                        Terceiro lugar: R$ 2.000 (2 mil reais)
                                    </p>
                                    <p class="mb-4">11. A igreja beneficiada deve fazer parte do espaço geográfico correspondente a Associação Paulista Sul da Igreja Adventista do Sétimo Dia. 
                                    </p>
                                    <p class="mb-4">12. As datas da realização das provas serão:
                                    </p>
                                    <p class="mb-4">Prova 1 online – 17/04
                                    </p>
                                    <p class="mb-4">Prova 2 online – 22/05
                                    </p>
                                    <p class="mb-4">Prova 3 online – 26/06
                                    </p>
                                    <p class="mb-4">Prova 4 online – 31/07
                                    </p>
                                    <p class="mb-4">Prova 5 (Presencial) – 21/08
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        Fechar Contrato
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Integrantes-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/integrantes.js"></script>
    <script src="js/custon.js"></script>
    <script src="js/contdown.js"></script>
    <!-- Prova-->
    <script type="text/javascript">
        var QuizWorks = window.QuizWorks || [];
        QuizWorks.push(
            [document.getElementById("embed-exam-501348"), "exam", "501348", {
                autostart: false,
                width: "100%",
                height: "640px",
            }]
        );
    </script>
    <script type="text/javascript" async defer src="https://d1vpp6qbv6ryr9.cloudfront.net/script/embed.min.js"></script>
    <!-- Mascara Teelefone-->

    <!-- Recaptia-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>