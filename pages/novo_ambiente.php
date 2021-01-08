<?php

require_once('../../../config.php');
require_once('../classes/Sybase.php');
require_once('../classes/Helper.php');

use block_extensao\Sybase;
use block_extensao\Helper;

$url = new moodle_url("/blocks/extensao/pages/novo_ambiente.php");
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('admin');

require_login();

# Primeiramente verificamos se a requisição é do tipo form
$fullname = optional_param('nome_completo_form', false, PARAM_TEXT);
$shortname = optional_param('nome_breve_form', false, PARAM_TEXT);
$visible = optional_param('visible_form', false, PARAM_TEXT);
$oferecimento = optional_param('oferecimento_form', false, PARAM_INT);

if(!empty($fullname) && !empty($shortname) && !empty($visible) && !empty($oferecimento)){
  $course = new \stdClass();
  $course->shortname   = $shortname;
  $course->fullname    = $fullname;
  $course->description = $fullname;
  $course->summary     = $fullname;
  $course->visible     = $visible;
  $course->idnumber    = $oferecimento;
  $course = Helper::new_course($course);

  $url = new moodle_url('/course/view.php', array('id' => $course->id));
  redirect($url);
} else {
  # Se for uma requisição GET caímos no caso de mostrar o formulário
  $codpes = optional_param('codpes', false, PARAM_INT);
  $oferecimento = optional_param('oferecimento', false, PARAM_ALPHANUM);
  
  $curso = Sybase::curso($oferecimento);
    
  $title = get_string('pluginname', 'block_extensao');
  $page_title = 'Novo ambiente para ' . $curso['nomcurceu'];
  $PAGE->set_title($page_title);
  $PAGE->set_heading($page_title);

  echo $OUTPUT->header();
    include_once('../forms/ambiente.php');
  echo $OUTPUT->footer();
}