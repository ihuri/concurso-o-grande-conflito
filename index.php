<?php
include 'db.php';

 $sql = 'select * from igrejas';
 $statement = $connection->prepare($sql);
 $statement->execute();

 $igrejas = $statement->fetchAll(PDO::FETCH_OBJ);

 //var_dump($igrejas);

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
                    <h1 class="mx-auto my-0 text-uppercase">O Grande Conflito</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Participe do nosso concurso e mostre que você e sua equipe dominam o assunto.</h2>
                    <a class="btn btn-primary" href="#subscription">Inscreva-se</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Informações-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Informações sobre o Concurso</h2>
                    <p class="text-white-50">
                        Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                        <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a> The theme is open source, and you can use it for any purpose, personal or commercial.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/ipad-grande-conflito.png" alt="..." />
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
                        <form action="" method="get">
                            <div class="col-md-812 col-lg-12 mb-5">

                                <div class="form-group">
                                    <label for="nome">Nome do Líder:</label>
                                    <input class="form-control" type="text" name="nome" id="nome">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp do Líder</label>
                                    <input class="form-control" type="tel" name="whatsapp" id="whatsapp">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do Líder</label>
                                    <input class="form-control" type="email" name="email" id="email">
                                </div>
                                <div class="form-group">                            
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <label for="grupo">Nome do seu Grupo:</label>
                                            <input class="form-control" type="grupo" name="grupo" id="grupo">
                                        </div>
                                        <div class="col-sm">
                                            <label for="igreja">Igreja do Grupo: </label>
                                            <select class="form-control" id="igreja" name="igreja">
                                                <option value="0">Selecione..</option>
                                                <?php
                                                    foreach ($igrejas as $key => $igreja) {
                                                        echo "<option value='".$igreja->id."'>".$igreja->nome."</option>"; 
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

                                <br />
                                <button type="submit" class="btn btn-primary mb-2" name="send" id="send">Cadastrar</button>

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

</body>

</html>