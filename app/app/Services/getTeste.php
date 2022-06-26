<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class getTeste
{
    public function getTeste($dados)
    {
        try {

            foreach ($dados as $key => $value) {
                if(substr($key, 0, 3) == "qst"){
                    $val['questoes'][$key] = intval($value);
                }
            }

            $val['sessao']['sessao1'] = intval($val['questoes']['qst1']) + intval($val['questoes']['qst2']) + intval($val['questoes']['qst3']) + intval($val['questoes']['qst4']) + intval($val['questoes']['qst5']) + intval($val['questoes']['qst6']);
            $val['sessao']['sessao2'] = intval($val['questoes']['qst7']) + intval($val['questoes']['qst8']) + intval($val['questoes']['qst9']) + intval($val['questoes']['qst10']) + intval($val['questoes']['qst11']) + intval($val['questoes']['qst12']);
            $val['sessao']['sessao3'] = intval($val['questoes']['qst13']) + intval($val['questoes']['qst14']) + intval($val['questoes']['qst15']) + intval($val['questoes']['qst16']) + intval($val['questoes']['qst17']) + intval($val['questoes']['qst18']);
            $val['sessao']['sessao4'] = intval($val['questoes']['qst19']) + intval($val['questoes']['qst20']) + intval($val['questoes']['qst21']) + intval($val['questoes']['qst22']) + intval($val['questoes']['qst23']) + intval($val['questoes']['qst24']);
            $val['sessao']['sessao5'] = intval($val['questoes']['qst25']) + intval($val['questoes']['qst26']) + intval($val['questoes']['qst27']) + intval($val['questoes']['qst28']) + intval($val['questoes']['qst29']) + intval($val['questoes']['qst30']);
            $val['sessao']['sessao6'] = intval($val['questoes']['qst31']) + intval($val['questoes']['qst32']) + intval($val['questoes']['qst33']) + intval($val['questoes']['qst34']) + intval($val['questoes']['qst35']) + intval($val['questoes']['qst36']);
            $val['sessao']['sessao7'] = intval($val['questoes']['qst37']) + intval($val['questoes']['qst38']) + intval($val['questoes']['qst39']) + intval($val['questoes']['qst40']) + intval($val['questoes']['qst41']) + intval($val['questoes']['qst42']);
            $val['sessao']['sessao8'] = intval($val['questoes']['qst43']) + intval($val['questoes']['qst44']) + intval($val['questoes']['qst45']) + intval($val['questoes']['qst46']) + intval($val['questoes']['qst47']) + intval($val['questoes']['qst48']);
            $val['sessao']['sessao9'] = intval($val['questoes']['qst49']) + intval($val['questoes']['qst50']) + intval($val['questoes']['qst51']) + intval($val['questoes']['qst52']) + intval($val['questoes']['qst53']) + intval($val['questoes']['qst54']);
            $val['sessao']['sessao10'] = intval($val['questoes']['qst55']) + intval($val['questoes']['qst56']) + intval($val['questoes']['qst57']) + intval($val['questoes']['qst58']) + intval($val['questoes']['qst59']) + intval($val['questoes']['qst60']);
            $val['sessao']['sessao11'] = intval($val['questoes']['qst61']) + intval($val['questoes']['qst62']) + intval($val['questoes']['qst63']) + intval($val['questoes']['qst64']) + intval($val['questoes']['qst65']) + intval($val['questoes']['qst66']);
            $val['sessao']['sessao12'] = intval($val['questoes']['qst67']) + intval($val['questoes']['qst68']) + intval($val['questoes']['qst69']) + intval($val['questoes']['qst70']) + intval($val['questoes']['qst71']) + intval($val['questoes']['qst72']);
            $val['sessao']['sessao13'] = intval($val['questoes']['qst73']) + intval($val['questoes']['qst74']) + intval($val['questoes']['qst75']) + intval($val['questoes']['qst76']) + intval($val['questoes']['qst77']) + intval($val['questoes']['qst78']);
            $val['sessao']['sessao14'] = intval($val['questoes']['qst79']) + intval($val['questoes']['qst80']) + intval($val['questoes']['qst81']) + intval($val['questoes']['qst82']) + intval($val['questoes']['qst83']) + intval($val['questoes']['qst84']);

            $val['teste']['atena'] = intval($val['questoes']['qst6']) + intval($val['questoes']['qst7']) + intval($val['questoes']['qst14']) + intval($val['questoes']['qst21']) + intval($val['questoes']['qst28']) + intval($val['questoes']['qst34']) + intval($val['questoes']['qst42']) + intval($val['questoes']['qst45']) + intval($val['questoes']['qst52']) + intval($val['questoes']['qst59']) + intval($val['questoes']['qst61']) + intval($val['questoes']['qst69']) + intval($val['questoes']['qst78']) + intval($val['questoes']['qst79']);
            $val['teste']['afrodite'] = intval($val['questoes']['qst5']) + intval($val['questoes']['qst9']) + intval($val['questoes']['qst17']) + intval($val['questoes']['qst20']) + intval($val['questoes']['qst30']) + intval($val['questoes']['qst31']) + intval($val['questoes']['qst39']) + intval($val['questoes']['qst44']) + intval($val['questoes']['qst53']) + intval($val['questoes']['qst56']) + intval($val['questoes']['qst64']) + intval($val['questoes']['qst72']) + intval($val['questoes']['qst77']) + intval($val['questoes']['qst80']);
            $val['teste']['persefone'] = intval($val['questoes']['qst3']) + intval($val['questoes']['qst10']) + intval($val['questoes']['qst16']) + intval($val['questoes']['qst24']) + intval($val['questoes']['qst25']) + intval($val['questoes']['qst35']) + intval($val['questoes']['qst37']) + intval($val['questoes']['qst48']) + intval($val['questoes']['qst54']) + intval($val['questoes']['qst55']) + intval($val['questoes']['qst62']) + intval($val['questoes']['qst70']) + intval($val['questoes']['qst75']) + intval($val['questoes']['qst81']);
            $val['teste']['artemis'] = intval($val['questoes']['qst2']) + intval($val['questoes']['qst8']) + intval($val['questoes']['qst18']) + intval($val['questoes']['qst19']) + intval($val['questoes']['qst29']) + intval($val['questoes']['qst33']) + intval($val['questoes']['qst40']) + intval($val['questoes']['qst47']) + intval($val['questoes']['qst49']) + intval($val['questoes']['qst57']) + intval($val['questoes']['qst66']) + intval($val['questoes']['qst68']) + intval($val['questoes']['qst76']) + intval($val['questoes']['qst82']);
            $val['teste']['demeter'] = intval($val['questoes']['qst1']) + intval($val['questoes']['qst12']) + intval($val['questoes']['qst15']) + intval($val['questoes']['qst22']) + intval($val['questoes']['qst27']) + intval($val['questoes']['qst32']) + intval($val['questoes']['qst41']) + intval($val['questoes']['qst46']) + intval($val['questoes']['qst50']) + intval($val['questoes']['qst60']) + intval($val['questoes']['qst65']) + intval($val['questoes']['qst67']) + intval($val['questoes']['qst73']) + intval($val['questoes']['qst83']);
            $val['teste']['hera'] = intval($val['questoes']['qst4']) + intval($val['questoes']['qst11']) + intval($val['questoes']['qst13']) + intval($val['questoes']['qst23']) + intval($val['questoes']['qst26']) + intval($val['questoes']['qst36']) + intval($val['questoes']['qst38']) + intval($val['questoes']['qst43']) + intval($val['questoes']['qst51']) + intval($val['questoes']['qst58']) + intval($val['questoes']['qst63']) + intval($val['questoes']['qst71']) + intval($val['questoes']['qst74']) + intval($val['questoes']['qst84']);

            $val['pontuacao']['geral'] = intval($val['sessao']['sessao1']) + intval($val['sessao']['sessao2']) + intval($val['sessao']['sessao3']) + intval($val['sessao']['sessao4']) + intval($val['sessao']['sessao5']) + intval($val['sessao']['sessao6']) + intval($val['sessao']['sessao7']) + intval($val['sessao']['sessao8']) + intval($val['sessao']['sessao9']) + intval($val['sessao']['sessao10']) + intval($val['sessao']['sessao11']) + intval($val['sessao']['sessao12']) + intval($val['sessao']['sessao13']) + intval($val['sessao']['sessao14']);
            $val['pontuacao']['Total'] = intval($val['teste']['atena']) + intval($val['teste']['afrodite']) + intval($val['teste']['persefone']) + intval($val['teste']['artemis']) + intval($val['teste']['demeter']) + intval($val['teste']['hera']);

            return $val;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
