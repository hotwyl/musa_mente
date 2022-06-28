<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class getTeste
{
    public function getTeste($dados)
    {
        try {
            $info['url'] = (string) Str::uuid();
            $info['nome'] = !empty($dados['nome']) ? $dados['nome'] : '';
            $info['email'] = !empty($dados['email']) ? $dados['email'] : '';
            $info['fone'] = !empty($dados['fone']) ? $dados['fone'] : '';
            $info['protocolo'] = date('z') . date('W') . date('t') . date('w') . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s');
            $info['data'] = date("Y-m-d H:i:s");

            foreach ($dados as $key => $value) {
                if(substr($key, 0, 3) == "qst"){
                    $val[$key] = intval($value);
                }
            }

            $info['sessao1'] = intval($val['qst1']) + intval($val['qst2']) + intval($val['qst3']) + intval($val['qst4']) + intval($val['qst5']) + intval($val['qst6']);
            $info['sessao2'] = intval($val['qst7']) + intval($val['qst8']) + intval($val['qst9']) + intval($val['qst10']) + intval($val['qst11']) + intval($val['qst12']);
            $info['sessao3'] = intval($val['qst13']) + intval($val['qst14']) + intval($val['qst15']) + intval($val['qst16']) + intval($val['qst17']) + intval($val['qst18']);
            $info['sessao4'] = intval($val['qst19']) + intval($val['qst20']) + intval($val['qst21']) + intval($val['qst22']) + intval($val['qst23']) + intval($val['qst24']);
            $info['sessao5'] = intval($val['qst25']) + intval($val['qst26']) + intval($val['qst27']) + intval($val['qst28']) + intval($val['qst29']) + intval($val['qst30']);
            $info['sessao6'] = intval($val['qst31']) + intval($val['qst32']) + intval($val['qst33']) + intval($val['qst34']) + intval($val['qst35']) + intval($val['qst36']);
            $info['sessao7'] = intval($val['qst37']) + intval($val['qst38']) + intval($val['qst39']) + intval($val['qst40']) + intval($val['qst41']) + intval($val['qst42']);
            $info['sessao8'] = intval($val['qst43']) + intval($val['qst44']) + intval($val['qst45']) + intval($val['qst46']) + intval($val['qst47']) + intval($val['qst48']);
            $info['sessao9'] = intval($val['qst49']) + intval($val['qst50']) + intval($val['qst51']) + intval($val['qst52']) + intval($val['qst53']) + intval($val['qst54']);
            $info['sessao10'] = intval($val['qst55']) + intval($val['qst56']) + intval($val['qst57']) + intval($val['qst58']) + intval($val['qst59']) + intval($val['qst60']);
            $info['sessao11'] = intval($val['qst61']) + intval($val['qst62']) + intval($val['qst63']) + intval($val['qst64']) + intval($val['qst65']) + intval($val['qst66']);
            $info['sessao12'] = intval($val['qst67']) + intval($val['qst68']) + intval($val['qst69']) + intval($val['qst70']) + intval($val['qst71']) + intval($val['qst72']);
            $info['sessao13'] = intval($val['qst73']) + intval($val['qst74']) + intval($val['qst75']) + intval($val['qst76']) + intval($val['qst77']) + intval($val['qst78']);
            $info['sessao14'] = intval($val['qst79']) + intval($val['qst80']) + intval($val['qst81']) + intval($val['qst82']) + intval($val['qst83']) + intval($val['qst84']);

            $info['atena'] = intval($val['qst6']) + intval($val['qst7']) + intval($val['qst14']) + intval($val['qst21']) + intval($val['qst28']) + intval($val['qst34']) + intval($val['qst42']) + intval($val['qst45']) + intval($val['qst52']) + intval($val['qst59']) + intval($val['qst61']) + intval($val['qst69']) + intval($val['qst78']) + intval($val['qst79']);
            $info['afrodite'] = intval($val['qst5']) + intval($val['qst9']) + intval($val['qst17']) + intval($val['qst20']) + intval($val['qst30']) + intval($val['qst31']) + intval($val['qst39']) + intval($val['qst44']) + intval($val['qst53']) + intval($val['qst56']) + intval($val['qst64']) + intval($val['qst72']) + intval($val['qst77']) + intval($val['qst80']);
            $info['persefone'] = intval($val['qst3']) + intval($val['qst10']) + intval($val['qst16']) + intval($val['qst24']) + intval($val['qst25']) + intval($val['qst35']) + intval($val['qst37']) + intval($val['qst48']) + intval($val['qst54']) + intval($val['qst55']) + intval($val['qst62']) + intval($val['qst70']) + intval($val['qst75']) + intval($val['qst81']);
            $info['artemis'] = intval($val['qst2']) + intval($val['qst8']) + intval($val['qst18']) + intval($val['qst19']) + intval($val['qst29']) + intval($val['qst33']) + intval($val['qst40']) + intval($val['qst47']) + intval($val['qst49']) + intval($val['qst57']) + intval($val['qst66']) + intval($val['qst68']) + intval($val['qst76']) + intval($val['qst82']);
            $info['demeter'] = intval($val['qst1']) + intval($val['qst12']) + intval($val['qst15']) + intval($val['qst22']) + intval($val['qst27']) + intval($val['qst32']) + intval($val['qst41']) + intval($val['qst46']) + intval($val['qst50']) + intval($val['qst60']) + intval($val['qst65']) + intval($val['qst67']) + intval($val['qst73']) + intval($val['qst83']);
            $info['hera'] = intval($val['qst4']) + intval($val['qst11']) + intval($val['qst13']) + intval($val['qst23']) + intval($val['qst26']) + intval($val['qst36']) + intval($val['qst38']) + intval($val['qst43']) + intval($val['qst51']) + intval($val['qst58']) + intval($val['qst63']) + intval($val['qst71']) + intval($val['qst74']) + intval($val['qst84']);

            $info['geral'] = intval($info['sessao1']) + intval($info['sessao2']) + intval($info['sessao3']) + intval($info['sessao4']) + intval($info['sessao5']) + intval($info['sessao6']) + intval($info['sessao7']) + intval($info['sessao8']) + intval($info['sessao9']) + intval($info['sessao10']) + intval($info['sessao11']) + intval($info['sessao12']) + intval($info['sessao13']) + intval($info['sessao14']);
            $info['total'] = intval($info['atena']) + intval($info['afrodite']) + intval($info['persefone']) + intval($info['artemis']) + intval($info['demeter']) + intval($info['hera']);

            return $info;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
