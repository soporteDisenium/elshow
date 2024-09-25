<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.01';
$CFG->dbname    = 'ra405399_cursos_md';
$CFG->dbuser    = 'ra405399_cursos_md';
$CFG->dbpass    = 'v]{OYuKpb*hECJRcm24(smBI';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://cursos.elshowdelapalabra.com';
$CFG->dataroot  = '/home/ra405399/moddledata_show';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
