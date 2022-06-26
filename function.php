<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function conect()
{
    try {
        // $servername = "nspro102.hostgator.com.br";
        // $port = "3306";
        // $username = "musada86_hotwyl";
        // $password = "3278Data";
        // $dbname = "musada86_dataarqmm";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "musadadamente";

        $pdo = new PDO(
            //"mysql:host=$servername;dbname=$dbname;port=$port",
            "mysql:host=$servername;dbname=$dbname",
            "$username",
            "$password",
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
        );

        return $pdo;
    } catch (\PDOException $ex) {
        throw $ex;
    } catch (\Exception $ex) {
        throw $ex;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["dados"]) && !empty($_POST["dados"])) {

    foreach ($_POST["dados"] as $key => $values) {
        foreach ($values as $cheve => $valor) {
            $arDados[$key][$cheve] = strip_tags(addslashes(trim($valor)));
        }
    }

    $val['informacao'] = getInformacoes($arDados['contato']);

    $val['teste'] = getTeste($arDados['questions']);

    $val['resultado'] = geraResult($val);

    // $val['pdf'] = geraPdf($val);

    //$salvaTeste = salvaTeste($val);

    // $registraLeadLovers = registraLeadLovers();

    // $enviaEmail = enviaEmail();

}

function getInformacoes($dados)
{
    try {
        $dados['protocolo'] = date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
        $dados['data'] = date("Y-m-d H:i:s");
        return $dados;
    } catch (\Throwable $th) {
        throw $th;
    }
}

function getTeste($dados)
{
    try {
        foreach ($dados as $key => $value) {
            $val['questao'][$key] = intval($value);
        }

        $val['section']['section1'] = intval($val['questao']['question1']) + intval($val['questao']['question2']) + intval($val['questao']['question3']) + intval($val['questao']['question4']) + intval($val['questao']['question5']) + intval($val['questao']['question6']);
        $val['section']['section2'] = intval($val['questao']['question7']) + intval($val['questao']['question8']) + intval($val['questao']['question9']) + intval($val['questao']['question10']) + intval($val['questao']['question11']) + intval($val['questao']['question12']);
        $val['section']['section3'] = intval($val['questao']['question13']) + intval($val['questao']['question14']) + intval($val['questao']['question15']) + intval($val['questao']['question16']) + intval($val['questao']['question17']) + intval($val['questao']['question18']);
        $val['section']['section4'] = intval($val['questao']['question19']) + intval($val['questao']['question20']) + intval($val['questao']['question21']) + intval($val['questao']['question22']) + intval($val['questao']['question23']) + intval($val['questao']['question24']);
        $val['section']['section5'] = intval($val['questao']['question25']) + intval($val['questao']['question26']) + intval($val['questao']['question27']) + intval($val['questao']['question28']) + intval($val['questao']['question29']) + intval($val['questao']['question30']);
        $val['section']['section6'] = intval($val['questao']['question31']) + intval($val['questao']['question32']) + intval($val['questao']['question33']) + intval($val['questao']['question34']) + intval($val['questao']['question35']) + intval($val['questao']['question36']);
        $val['section']['section7'] = intval($val['questao']['question37']) + intval($val['questao']['question38']) + intval($val['questao']['question39']) + intval($val['questao']['question40']) + intval($val['questao']['question41']) + intval($val['questao']['question42']);
        $val['section']['section8'] = intval($val['questao']['question43']) + intval($val['questao']['question44']) + intval($val['questao']['question45']) + intval($val['questao']['question46']) + intval($val['questao']['question47']) + intval($val['questao']['question48']);
        $val['section']['section9'] = intval($val['questao']['question49']) + intval($val['questao']['question50']) + intval($val['questao']['question51']) + intval($val['questao']['question52']) + intval($val['questao']['question53']) + intval($val['questao']['question54']);
        $val['section']['section10'] = intval($val['questao']['question55']) + intval($val['questao']['question56']) + intval($val['questao']['question57']) + intval($val['questao']['question58']) + intval($val['questao']['question59']) + intval($val['questao']['question60']);
        $val['section']['section11'] = intval($val['questao']['question61']) + intval($val['questao']['question62']) + intval($val['questao']['question63']) + intval($val['questao']['question64']) + intval($val['questao']['question65']) + intval($val['questao']['question66']);
        $val['section']['section12'] = intval($val['questao']['question67']) + intval($val['questao']['question68']) + intval($val['questao']['question69']) + intval($val['questao']['question70']) + intval($val['questao']['question71']) + intval($val['questao']['question72']);
        $val['section']['section13'] = intval($val['questao']['question73']) + intval($val['questao']['question74']) + intval($val['questao']['question75']) + intval($val['questao']['question76']) + intval($val['questao']['question77']) + intval($val['questao']['question78']);
        $val['section']['section14'] = intval($val['questao']['question79']) + intval($val['questao']['question80']) + intval($val['questao']['question81']) + intval($val['questao']['question82']) + intval($val['questao']['question83']) + intval($val['questao']['question84']);

        $val['teste']['atena'] = intval($val['questao']['question6']) + intval($val['questao']['question7']) + intval($val['questao']['question14']) + intval($val['questao']['question21']) + intval($val['questao']['question28']) + intval($val['questao']['question34']) + intval($val['questao']['question42']) + intval($val['questao']['question45']) + intval($val['questao']['question52']) + intval($val['questao']['question59']) + intval($val['questao']['question61']) + intval($val['questao']['question69']) + intval($val['questao']['question78']) + intval($val['questao']['question79']);
        $val['teste']['afrodite'] = intval($val['questao']['question5']) + intval($val['questao']['question9']) + intval($val['questao']['question17']) + intval($val['questao']['question20']) + intval($val['questao']['question30']) + intval($val['questao']['question31']) + intval($val['questao']['question39']) + intval($val['questao']['question44']) + intval($val['questao']['question53']) + intval($val['questao']['question56']) + intval($val['questao']['question64']) + intval($val['questao']['question72']) + intval($val['questao']['question77']) + intval($val['questao']['question80']);
        $val['teste']['persefone'] = intval($val['questao']['question3']) + intval($val['questao']['question10']) + intval($val['questao']['question16']) + intval($val['questao']['question24']) + intval($val['questao']['question25']) + intval($val['questao']['question35']) + intval($val['questao']['question37']) + intval($val['questao']['question48']) + intval($val['questao']['question54']) + intval($val['questao']['question55']) + intval($val['questao']['question62']) + intval($val['questao']['question70']) + intval($val['questao']['question75']) + intval($val['questao']['question81']);
        $val['teste']['artemis'] = intval($val['questao']['question2']) + intval($val['questao']['question8']) + intval($val['questao']['question18']) + intval($val['questao']['question19']) + intval($val['questao']['question29']) + intval($val['questao']['question33']) + intval($val['questao']['question40']) + intval($val['questao']['question47']) + intval($val['questao']['question49']) + intval($val['questao']['question57']) + intval($val['questao']['question66']) + intval($val['questao']['question68']) + intval($val['questao']['question76']) + intval($val['questao']['question82']);
        $val['teste']['demeter'] = intval($val['questao']['question1']) + intval($val['questao']['question12']) + intval($val['questao']['question15']) + intval($val['questao']['question22']) + intval($val['questao']['question27']) + intval($val['questao']['question32']) + intval($val['questao']['question41']) + intval($val['questao']['question46']) + intval($val['questao']['question50']) + intval($val['questao']['question60']) + intval($val['questao']['question65']) + intval($val['questao']['question67']) + intval($val['questao']['question73']) + intval($val['questao']['question83']);
        $val['teste']['hera'] = intval($val['questao']['question4']) + intval($val['questao']['question11']) + intval($val['questao']['question13']) + intval($val['questao']['question23']) + intval($val['questao']['question26']) + intval($val['questao']['question36']) + intval($val['questao']['question38']) + intval($val['questao']['question43']) + intval($val['questao']['question51']) + intval($val['questao']['question58']) + intval($val['questao']['question63']) + intval($val['questao']['question71']) + intval($val['questao']['question74']) + intval($val['questao']['question84']);

        $val['pontuacao']['geral'] = intval($val['section']['section1']) + intval($val['section']['section2']) + intval($val['section']['section3']) + intval($val['section']['section4']) + intval($val['section']['section5']) + intval($val['section']['section6']) + intval($val['section']['section7']) + intval($val['section']['section8']) + intval($val['section']['section9']) + intval($val['section']['section10']) + intval($val['section']['section11']) + intval($val['section']['section12']) + intval($val['section']['section13']) + intval($val['section']['section14']);
        $val['pontuacao']['Total'] = intval($val['teste']['atena']) + intval($val['teste']['afrodite']) + intval($val['teste']['persefone']) + intval($val['teste']['artemis']) + intval($val['teste']['demeter']) + intval($val['teste']['hera']);
       
        return $val;
    } catch (\Throwable $th) {
        throw $th;
    }
}

function geraResult($dados)
{
    try {
        
        include_once 'dompdf/autoload.inc.php';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("relatorio.pdf");


        print_r(json_encode($dados));
        exit;
    } catch (\Throwable $th) {
        throw $th;
    } 
}


// function geraPdf($dados)
// {
//     try {
//         $text = '';


//         print_r(json_encode($dados));
//         exit;
//     } catch (\Throwable $th) {
//         throw $th;
//     } finally {
//         return $dados;
//     }
// }

// function salvaTeste($dados)
// {
//     try {
//         if (isset($dados['informacao'], $dados['teste'])) {

//             print_r(json_encode($dados));
//             exit;

//             // $table = "";
//             // $coluns = $sql['coluns'];
//             // $parameters = $sql['params'];
//             // $binds = $sql['binds'];
//         }
//     } catch (Throwable $th) {
//         throw $th;
//     }
// };
