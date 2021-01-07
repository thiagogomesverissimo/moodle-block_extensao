<?php

require_once('classes/Sybase.php');
require_once('classes/Helper.php');

use block_extensao\Sybase;
use block_extensao\Helper;

class block_extensao extends block_base {
    public function init() {
        $this->title = get_string('block_title', 'block_extensao');
    }

    public function get_content() {
     
        $this->content =  new stdClass;

        # Vamos listar todos cursos em que a pessoa em questão é ministrante
        $this->content->text = '';
        foreach(Sybase::oferecimentos('123') as $oferecimento){
            # Constrói a url da requisição GET para o formulário
            $course = Helper::get_course($oferecimento);
            if($course){
                $url = new moodle_url('/course/view.php', [
                    'id' => $course->id
                ]);       
                $attr = [
                    'class'=>'btn btn-xs btn-primary'
                ];
                $this->content->text .= Sybase::curso($oferecimento)['nomcurceu'] . '<br>';
                $this->content->text .= html_writer::link($url, 'Ir Para Curso', $attr) . '<br><br>';
            } else {
                $url = new moodle_url('/blocks/extensao/pages/novo_ambiente.php', [
                    'codpes' => '123456',
                    'oferecimento' => $oferecimento
                ]);
        
                $attr = [
                    'class'=>'btn btn-xs btn-success'
                ];
                $this->content->text .= Sybase::curso($oferecimento)['nomcurceu'] . '<br>';
                $this->content->text .= html_writer::link($url, 'Criar Ambiente', $attr) . '<br><br>';
            }
        }
        return $this->content;
    }

}