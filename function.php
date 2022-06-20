<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["dados"]) && !empty($_POST["dados"])) {

    foreach ($_POST["dados"] as $key => $values) {
        foreach ($values as $cheve => $valor) {
            $arDados[$key][$cheve] = strip_tags(addslashes(trim($valor)));
        }
    }

    $informacoes = getInformacoes($arDados['contato']);
    $questoes = getQuestoes($arDados['questions']);

    $salva = setBanco($informacoes, $questoes);
    // $leadLovers = sendlead();
    // $email = sendEmail();

}

function getInformacoes($dados)
{
    $dados['protocolo'] = date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
    $dados['data'] = date("Y-m-d H:i:s");
    return $dados;
}

function getQuestoes($dados)
{
    foreach ($dados as $key => $value) {
        $val[$key] = intval($value);
    }

    $val['section1'] = intval($val['question1']) + intval($val['question2']) + intval($val['question3']) + intval($val['question4']) + intval($val['question5']) + intval($val['question6']);
    $val['section2'] = intval($val['question7']) + intval($val['question8']) + intval($val['question9']) + intval($val['question10']) + intval($val['question11']) + intval($val['question12']);
    $val['section3'] = intval($val['question13']) + intval($val['question14']) + intval($val['question15']) + intval($val['question16']) + intval($val['question17']) + intval($val['question18']);
    $val['section4'] = intval($val['question19']) + intval($val['question20']) + intval($val['question21']) + intval($val['question22']) + intval($val['question23']) + intval($val['question24']);
    $val['section5'] = intval($val['question25']) + intval($val['question26']) + intval($val['question27']) + intval($val['question28']) + intval($val['question29']) + intval($val['question30']);
    $val['section6'] = intval($val['question31']) + intval($val['question32']) + intval($val['question33']) + intval($val['question34']) + intval($val['question35']) + intval($val['question36']);
    $val['section7'] = intval($val['question37']) + intval($val['question38']) + intval($val['question39']) + intval($val['question40']) + intval($val['question41']) + intval($val['question42']);
    $val['section8'] = intval($val['question43']) + intval($val['question44']) + intval($val['question45']) + intval($val['question46']) + intval($val['question47']) + intval($val['question48']);
    $val['section9'] = intval($val['question49']) + intval($val['question50']) + intval($val['question51']) + intval($val['question52']) + intval($val['question53']) + intval($val['question54']);
    $val['section10'] = intval($val['question55']) + intval($val['question56']) + intval($val['question57']) + intval($val['question58']) + intval($val['question59']) + intval($val['question60']);
    $val['section11'] = intval($val['question61']) + intval($val['question62']) + intval($val['question63']) + intval($val['question64']) + intval($val['question65']) + intval($val['question66']);
    $val['section12'] = intval($val['question67']) + intval($val['question68']) + intval($val['question69']) + intval($val['question70']) + intval($val['question71']) + intval($val['question72']);
    $val['section13'] = intval($val['question73']) + intval($val['question74']) + intval($val['question75']) + intval($val['question76']) + intval($val['question77']) + intval($val['question78']);
    $val['section14'] = intval($val['question79']) + intval($val['question80']) + intval($val['question81']) + intval($val['question82']) + intval($val['question83']) + intval($val['question84']);

    $val['afrodite'] = intval($val['question1']) + intval($val['question7']) + intval($val['question13']) + intval($val['question19']) + intval($val['question25']) + intval($val['question31']) + intval($val['question37']) + intval($val['question43']) + intval($val['question49']) + intval($val['question55']) + intval($val['question61']) + intval($val['question67']) + intval($val['question73']) + intval($val['question79']);
    $val['artemis'] = intval($val['question2']) + intval($val['question8']) + intval($val['question14']) + intval($val['question20']) + intval($val['question26']) + intval($val['question32']) + intval($val['question38']) + intval($val['question44']) + intval($val['question50']) + intval($val['question56']) + intval($val['question62']) + intval($val['question68']) + intval($val['question74']) + intval($val['question80']);
    $val['atenas'] = intval($val['question3']) + intval($val['question9']) + intval($val['question15']) + intval($val['question21']) + intval($val['question27']) + intval($val['question33']) + intval($val['question39']) + intval($val['question45']) + intval($val['question51']) + intval($val['question57']) + intval($val['question63']) + intval($val['question69']) + intval($val['question75']) + intval($val['question81']);
    $val['hera'] = intval($val['question4']) + intval($val['question10']) + intval($val['question16']) + intval($val['question22']) + intval($val['question28']) + intval($val['question34']) + intval($val['question40']) + intval($val['question46']) + intval($val['question52']) + intval($val['question58']) + intval($val['question64']) + intval($val['question70']) + intval($val['question76']) + intval($val['question82']);
    $val['persefone'] = intval($val['question5']) + intval($val['question11']) + intval($val['question17']) + intval($val['question23']) + intval($val['question29']) + intval($val['question35']) + intval($val['question41']) + intval($val['question47']) + intval($val['question53']) + intval($val['question59']) + intval($val['question65']) + intval($val['question71']) + intval($val['question77']) + intval($val['question83']);
    $val['demeter'] = intval($val['question6']) + intval($val['question12']) + intval($val['question18']) + intval($val['question24']) + intval($val['question30']) + intval($val['question36']) + intval($val['question42']) + intval($val['question48']) + intval($val['question54']) + intval($val['question60']) + intval($val['question66']) + intval($val['question72']) + intval($val['question78']) + intval($val['question84']);

    $val['total1'] = intval($val['section1']) + intval($val['section2']) + intval($val['section3']) + intval($val['section4']) + intval($val['section5']) + intval($val['section6']) + intval($val['section7']) + intval($val['section8']) + intval($val['section9']) + intval($val['section10']) + intval($val['section11']) + intval($val['section12']) + intval($val['section13']) + intval($val['section14']);
    $val['total2'] = intval($val['afrodite']) + intval($val['artemis']) + intval($val['atenas']) + intval($val['hera']) + intval($val['persefone']) + intval($val['demeter']);

    return $val;
}

function setBanco($informacoes, $questoes)
{

    echo "<pre>";
    print_r($questoes);
    echo "</pre>";
    exit;

    try {

        $servername = "nspro102.hostgator.com.br:3306";
        $username = "musada86_hotwyl";
        $password = "3278Data";
        $dbname = "musada86_dataarqmm";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // $mysqli = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception("Falha na conexão" . $conn->connect_error);
        }

        if (isset($sql['table'], $sql['coluns'], $sql['binds'], $sql['params'])) {
            throw new Exception("montou sql");
            $table = $sql['table'];
            $coluns = $sql['coluns'];
            $parameters = $sql['params'];
            $binds = $sql['binds'];

            $query = $conn->prepare("INSERT INTO $table ($coluns) VALUES ($parameters)");
            $query->bind_param($binds);
        }


        if ($result = $mysqli->query("SELECT * FROM database_send WHERE email_nome='$email'")) {

            $row_cnt = $result->num_rows;

            if ($row_cnt > 0) {

                throw new Exception("Esse email já está cadastrado, substituindo os resultados.");

                $sql = "UPDATE database_send SET email_nome='lixodamusa@yopmail.com'  WHERE email_nome='$email'";

                if ($conn->query($sql) === TRUE) {
                    throw new Exception("Resultados substituídos.");
                } else {
                    throw new Exception("Erro na substituição: " . $conn->error);
                }
            }

            $result->close();
        }

        $stmt = $conn->prepare("INSERT INTO database_send (email_nome, dummy_one, dummy_two, dummy_three, dummy_four, dummy_five, dummy_six) VALUES (?, ?, ?, ?, ?,?,?)");
        $stmt->bind_param("sssssss", $email, $at, $af, $pe, $ar, $de, $he);
        $stmt->execute();
        $stmt->close();
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        $conn->close();
    }
};
