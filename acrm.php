<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

require '/rating/edit.php';

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'kisotack_mood405';
$CFG->dbuser    = 'kisotack_mood405';
$CFG->dbpass    = '4x3S.Vyp-2';
$CFG->prefix    = 'mdlow_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://odel.kisot.ac.ke';
$CFG->dataroot  = '/home/kisotack/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
