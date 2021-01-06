<?php
class block_extensao extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_extensao');
    }

    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
     
        $this->content         =  new stdClass;
        #$this->content->text   = 'The content of our SimpleHTML block!';
        $this->content->footer = 'Footer here...';

        # Constroi uma url da requisição GET com parâmetros
        $url = new moodle_url('/blocks/extensao/wizard.php', [
            'userid' => '123456'
        ]);

        $attr = [
            'class'=>'btn btn-xs btn-success'
        ];

        $this->content->text = html_writer::link($url, 'Criar Ambiente', $attr);
       
        return $this->content;
    }

}