<?php
$raiz = $_SERVER['DOCUMENT_ROOT'];
include 'db.php';
include './PHPMailer-master/PHPMailerAutoload.php';

function enviarEmail($nome, $cod, $email){
    //configurações para envio de email
  $mail = new PHPMailer(); 
  $mail->IsSMTP(); 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->Username = 'noreplay@educadv.com.br'; 
  $mail->Password = 'zrfYh8FxaEBUz8V';
  $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
  $mail->From = "noreplay@educadv.com.br";
  $mail->FromName = "Educação Adventista";
  $mail->AddAddress($email, $nome);
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = "Esse é o seu código para o sorteio: ".$cod;
  $mail->Body = '
                              <div class="col-sm-6">
                              <h2>'.$nome.'</h2>
                              <h3>Seu código para o Sorteio:'.$cod.'</h3><br>
                              <h4>Regulamento</h4>
                        <p>Sorteio será realizado no dia 30/12/2020 por meio de uma live na página do Facebook das unidades: Colégio Adventista do Taboão da Serra, Colégio Adventista de Pirajuçara, Colégio Adventista de Itapecerica da Serra, Colégio Adventista de Campo Limpo e Colégio Adventista de Embu das Artes.
O ganhador deverá ser pai ou responsável de menor em idade escolar e este será contatado por telefone ou email devendo retirar o prêmio (patinete elétrico) na unidade de Taboão da Serra até o dia 05/01/2021.</p>
                              </div>                            
  
  '; 
  
  $enviado = $mail->Send();
  }

$DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
$data = strval($DT->format("His"));

 if (isset ($_POST['nome']) && (($_POST['nome']) != "") && isset ($_POST['whatsapp']) && (($_POST['whatsapp']) != "") 
 && ($_POST['cidade'] != 0) && ($_POST['escola'] != 0)) {
    $nome = $_POST['nome'];
    $whatsapp = $_POST['whatsapp'];
    $cidade = $_POST['cidade'];
    $escola = $_POST['escola'];
    $qt_filho = $_POST['qt'];
    $sorteio = random_int(1000, 99999);
    $sorteio = "AD".$sorteio.$data;

        $email = isset ($_POST['email']) && (($_POST['email']) != "") ? $_POST['email'] : null;
        $agendado = isset ($_POST['agendado']) && (($_POST['agendado']) != "") ? $_POST['agendado'] : 0;
        $idade_escolar = isset ($_POST['idade_escolar']) && (($_POST['idade_escolar']) != "") ? $_POST['idade_escolar'] : 0;
        $nome_filho1 = isset ($_POST['nome_filho1']) && (($_POST['nome_filho1']) != "") ? $_POST['nome_filho1'] : null;
        $serie_filho1 = isset ($_POST['serie_filho1']) && (($_POST['serie_filho1']) != "") ? $_POST['serie_filho1'] : null;
        $nome_filho2 = isset ($_POST['nome_filho2']) && (($_POST['nome_filho2']) != "") ? $_POST['nome_filho2'] : null;
        $serie_filho2 = isset ($_POST['serie_filho2']) && (($_POST['serie_filho2']) != "") ? $_POST['serie_filho2'] : null;
        $nome_filho3 = isset ($_POST['nome_filho3']) && (($_POST['nome_filho3']) != "") ? $_POST['nome_filho3'] : null;
        $serie_filho3 = isset ($_POST['serie_filho3']) && (($_POST['serie_filho3']) != "") ? $_POST['serie_filho3'] : null;
        $nome_filho4 = isset ($_POST['nome_filho4']) && (($_POST['nome_filho4']) != "") ? $_POST['nome_filho4'] : null;
        $serie_filho4 = isset ($_POST['serie_filho4']) && (($_POST['serie_filho4']) != "") ? $_POST['serie_filho4'] : null;
        $nome_filho5 = isset ($_POST['nome_filho5']) && (($_POST['nome_filho5']) != "") ? $_POST['nome_filho5'] : null;
        $serie_filho5 = isset ($_POST['serie_filho5']) && (($_POST['serie_filho5']) != "") ? $_POST['serie_filho5'] : null;
        
 
    $sql = 'INSERT INTO interessados(nome, whatsapp, email, idade_escolar, agendado, id_cidade, id_escola, nome_filho1, nome_filho2, nome_filho3, nome_filho4, nome_filho5, serie_filho1, serie_filho2, serie_filho3, serie_filho4, serie_filho5, sorteio) VALUES(:nome, :whatsapp, :email, :idade_escolar, :agendado,:cidade, :escola, :nome_filho1, :nome_filho2, :nome_filho3, :nome_filho4, :nome_filho5, :serie_filho1, :serie_filho2, :serie_filho3, :serie_filho4, :serie_filho5, :sorteio)';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':nome' => $nome, ':whatsapp' => $whatsapp, ':email' => $email, ':idade_escolar' => $idade_escolar, ':agendado' => $agendado,':cidade' => $cidade, ':escola' => $escola, ':nome_filho1' => $nome_filho1, ':nome_filho2' => $nome_filho2,':nome_filho3' => $nome_filho3,':nome_filho4' => $nome_filho4,':nome_filho5' => $nome_filho5, ':serie_filho1' => $serie_filho1, ':serie_filho2' => $serie_filho2,':serie_filho3' => $serie_filho3,':serie_filho4' => $serie_filho4,':serie_filho5' => $serie_filho5,':sorteio' => $sorteio])) {
                enviarEmail($nome, $sorteio, $email);
                sleep(1);
                header("Location: http://lead.paulistasul.org.br/sorteio.php?nome=".$nome."&id=".$sorteio); 
            }else {
        echo '
            <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("Erro!")
            </SCRIPT>
            '; 
    }
 }

?>