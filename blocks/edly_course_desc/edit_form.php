<?php

class block_edly_course_desc_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        global $CFG;

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        $mform->addElement('text', 'config_author_label', 'Author Label');
        $mform->setDefault('config_author_label', '');
        $mform->setType('config_author_label', PARAM_RAW);

        $mform->addElement('text', 'config_student_label', 'Student Enroll Label');
        $mform->setDefault('config_student_label', '');
        $mform->setType('config_student_label', PARAM_RAW);

        $mform->addElement('text', 'config_date_label', 'Date Label');
        $mform->setDefault('config_date_label', '');
        $mform->setType('config_date_label', PARAM_RAW);

    }
}
