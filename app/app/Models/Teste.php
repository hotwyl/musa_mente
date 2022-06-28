<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    protected $table = 'testes';

    protected $fillable = [
        'url',
        'nome',
        'email',
        'fone',
        'protocolo',
        'data',
        'sessao1',
        'sessao2',
        'sessao3',
        'sessao4',
        'sessao5',
        'sessao6',
        'sessao7',
        'sessao8',
        'sessao9',
        'sessao10',
        'sessao11',
        'sessao12',
        'sessao13',
        'sessao14',
        'atena',
        'afrodite',
        'persefone',
        'artemis',
        'demeter',
        'hera',
        'geral',
        'total',
        'sent_mai',
        'deletado'
    ];
}
