<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M600 extends Element implements ElementInterface
{
    const REG = 'M600';
    const LEVEL = 2;
    const PARENT = 'M001';

    protected $parameters = [
        'VL_TOT_CONT_NC_PER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Contribuição Não Cumulativa do Período (recuperado do campo 13 do ' .
                'Registro M610, quando o campo “COD_CONT” = 01, 02, 03, 04, 32 e 71) ',
            'format' => '15v2'
        ],
        'VL_TOT_CRED_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito Descontado, Apurado no Próprio Período da Escrituração (recuperado ' .
                'do campo 14 do Registro M500) ',
            'format' => '15v2'
        ],
        'VL_TOT_CRED_DESC_ANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito Descontado, Apurado em Período de Apuração Anterior (recuperado do ' .
                'campo 13 do Registro 1500) ',
            'format' => '15v2'
        ],
        'VL_TOT_CONT_NC_DEV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Contribuição Não Cumulativa Devida (02 - 03 - 04) ',
            'format' => '15v2'
        ],
        'VL_RET_NC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Retido na Fonte Deduzido no Período ',
            'format' => '15v2'
        ],
        'VL_OUT_DED_NC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Outras Deduções no Período ',
            'format' => '15v2'
        ],
        'VL_CONT_NC_REC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Não Cumulativa a Recolher/Pagar (05 - 06 - 07) ',
            'format' => '15v2'
        ],
        'VL_TOT_CONT_CUM_PER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Contribuição Cumulativa do Período (recuperado do campo 13 do Registro ' .
                'M610, quando o campo “COD_CONT” = 31, 32, 51, 52, 53, 54 e 72) ',
            'format' => '15v2'
        ],
        'VL_RET_CUM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Retido na Fonte Deduzido no Período ',
            'format' => '15v2'
        ],
        'VL_OUT_DED_CUM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Outras Deduções no Período ',
            'format' => '15v2'
        ],
        'VL_CONT_CUM_REC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Cumulativa a Recolher/Pagar (09 - 10 - 11) ',
            'format' => '15v2'
        ],
        'VL_TOT_CONT_REC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Contribuição a Recolher/Pagar no Período (08 + 12) ',
            'format' => '15v2'
        ],

    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}