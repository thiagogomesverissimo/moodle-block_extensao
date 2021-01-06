<?php
# https://docs.atp.usp.br/artigos/criacao-de-novos-ambientes-de-apoio-as-disciplinas/
die("cheguei aqui");

/*
require_once $CFG->dirroot . '/course/lib.php';
require_once($CFG->libdir.'/enrollib.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->libdir.'/../group/lib.php');


$newcategory = new stdClass();
$newcategory->name = $name;
$newcategory->description = $desc;
$newcategory->sortorder = 999;
$newcategory->parent = $parentid;
if(!$category = core_course_category::create($newcategory)) {
    \core\notification::error("Could not insert the new category '{$newcategory->name}'");
    return null;
        }

$course = new stdClass();
$course->shortname = "{$coddis}-{$codtur}";
$course->fullname = $coddis." - ".$disciplina->nomdis." (".$ano.")";
$course->startdate = time();
$course->enddate = $course->startdate + 130*3600*24; # 130 dias
$course->summary = $disciplina->objdis;
$course->{$localcoursefield} = $codmoodle;
$course->timemodified = time();

$course->cat = $this->usp_get_category(substr($coddis,0,3),$ano);

*/