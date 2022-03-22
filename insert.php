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

    echo "funcionou!";
  
    $sql = 'INSERT INTO inscricoes(nome, whatsapp, email, grupo, igreja, qt, nome_integrante01, nome_integrante02, nome_integrante03, nome_integrante04) VALUES (:nome, :whatsapp, :email, :grupo, :igreja, :qt, :nome_integrante01, :nome_integrante02, :nome_integrante03, :nome_integrante04)';
    
    $statement = $connection->prepare($sql);
    if ($statement->execute([':nome' => $nome, ':whatsapp' => $whatsapp, ':email' => $email, ':grupo' => $grupo, ':igreja' => $igreja,':qt' => $qt, ':nome_integrante01' => $nome_integrante01, ':nome_integrante02' => $nome_integrante02, ':nome_integrante03' => $nome_integrante03,':nome_integrante04' => $nome_integrante04])) {
                sleep(1);
                header("Location: http://localhost/ConcursoGC"); 
    }
}

?>