<?php

namespace block_extensao;

class Sybase
{

    /**
     * Método que devolve um array com os cursos em que
     * o $codpes é ministrante.
     */
    public static function oferecimentos($codpes){
        return [
            1,2,3,4
        ];
    }

    /**
     * Método que devolve um array com os cursos em que
     * o $codpes é ministrante.
     */
    public static function curso($codofeatvceu){
        if($codofeatvceu == 1){
            return [
                'nomcurceu' => 'Estudos Medievais 1',
                'objcur'    => 'Mediando ',
                'codund'    => 8
            ];
        }

        if($codofeatvceu == 2){
            return [
                'nomcurceu' => 'Estudos Medievais 2',
                'objcur'    => 'Mediando ',
                'codund'    => 8
            ];
        }

        if($codofeatvceu == 3){
            return [
                'nomcurceu' => 'Estudos Medievais 3',
                'objcur'    => 'Mediando ',
                'codund'    => 8
            ];
        }
        if($codofeatvceu == 4){
            return [
                'nomcurceu' => 'Estudos Medievais 4',
                'objcur'    => 'Mediando ',
                'codund'    => 8
            ];
        }
        
    }

}
