<?php

namespace block_extensao;
defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');
require_once($CFG->dirroot.'/course/lib.php');

class Helper
{
    /**
     * Estrutura das categorias ainda não implementado
     * 2020 -> FFLCH -> FLP -> FLP2002
     * 2020 -> FFLCH -> FLO -> FLO1000
     */
    private static function set_category($year = 2021) {
        global $DB, $CFG, $OUTPUT;

        #$year = date("Y");
        $category = $DB->get_record('course_categories', array('name'=>$year));
        if($category) return $category;      

        $parentid = 0;
        
        $newcategory = new \stdClass();
        $newcategory->name = $year;
        $newcategory->description = $year;
        $newcategory->sortorder = 999;
        $newcategory->parent = $parentid;
        if(!$category = \core_course_category::create($newcategory)) {
            \core\notification::error("Could not insert the new category '{$newcategory->name}'");
            return null;
        }

        return $category;
    }

    /**
     * Impelmenta
     */
    public static function new_course($course) {
        global $DB, $USER;
        
        $newcourse = new \stdClass();
        $newcourse->shortname = $course->shortname;
        $newcourse->fullname = $course->fullname ;
        $newcourse->description = $course->description;
        $newcourse->summary = $course->summary;
        $newcourse->idnumber = $course->idnumber;
        $newcourse->visible = $course->visible;

        $newcourse->format = get_config('moodlecourse', 'format');
        $newcourse->numsections = get_config('moodlecourse', 'numsections');
        $newcourse->summaryformat = FORMAT_HTML;
        
        $newcourse->startdate = time();
        $newcourse->enddate = $newcourse->startdate + 130*3600*24; # 130 dias
        $newcourse->timemodified = time();

        $category = self::set_category(2032);
        $newcourse->category = $category->id;
                
        return \create_course($newcourse);
    }

    public static function get_course($idnumber)
    {
        global $DB;
        $params = array('idnumber' => $idnumber);

        return $DB->get_record('course', $params);
    }
}