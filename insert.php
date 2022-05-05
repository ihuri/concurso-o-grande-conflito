<?php
$raiz = $_SERVER['DOCUMENT_ROOT'];
include 'db.php';

$DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
$hora = strval($DT->format("Hi"));
$token = md5("chavedaaplicacao".$hora);

if (isset ($_POST['_token']) && (($_POST['_token']) != "") && isset ($_POST['nome']) && (($_POST['nome']) != "") && isset ($_POST['whatsapp']) && (($_POST['whatsapp']) != "") && isset ($_POST['email']) && (($_POST['email']) != "") && isset ($_POST['grupo']) && (($_POST['grupo']) != "") && isset ($_POST['igreja']) && (($_POST['igreja']) != '0') && isset ($_POST['qt']) && (($_POST['qt']) >= 0)) {
    $_token = $_POST['_token'];
    $nome = $_POST['nome'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $grupo = $_POST['grupo'];
    $igreja = $_POST['igreja'];
    $qt = $_POST['qt'];

    $nome_integrante01 = isset($_POST['nome_integrante01']) ? $_POST['nome_integrante01'] : NULL;
    $nome_integrante02 = isset($_POST['nome_integrante02']) ? $_POST['nome_integrante02'] : NULL;
    $nome_integrante03 = isset($_POST['nome_integrante03']) ? $_POST['nome_integrante03'] : NULL;
    $nome_integrante04 = isset($_POST['nome_integrante04']) ? $_POST['nome_integrante04'] : NULL;

    if ($token != $_token) {
        header("Location: http://concurso.paulistasul.org.br");
    }
  
    $sql = 'INSERT INTO inscricoes(nome, whatsapp, email, grupo, igreja, qt, nome_integrante01, nome_integrante02, nome_integrante03, nome_integrante04) VALUES (:nome, :whatsapp, :email, :grupo, :igreja, :qt, :nome_integrante01, :nome_integrante02, :nome_integrante03, :nome_integrante04)';
    
    $statement = $connection->prepare($sql);
    if ($statement->execute([':nome' => $nome, ':whatsapp' => $whatsapp, ':email' => $email, ':grupo' => $grupo, ':igreja' => $igreja,':qt' => $qt, ':nome_integrante01' => $nome_integrante01, ':nome_integrante02' => $nome_integrante02, ':nome_integrante03' => $nome_integrante03,':nome_integrante04' => $nome_integrante04])) {
                //sleep(1);
                //header("Location: http://concurso.paulistasul.org.br");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inscrição - O Grande Conflito APS</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/contdown.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body id="page-top">
    <!-- Informações-->
    <section class="about-section text-center bg-black" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4 text-uppercase">Sua Inscrição Foi Realizada com Sucesso!</h2>
                    <p class="text-white-50">
                    Você receberar no dia da prova seu usuario e senha.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/ipad-grande-conflito.png" alt="..." />
            <br>
            <br>
            <br>
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

    <script type="text/javascript">
        function redirect() {
            history.go(-2)
        }

        setTimeout(redirect, 3000);
    </script>

</body>

</html>