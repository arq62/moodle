<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgs');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-34-193-232-231.compute-1.amazonaws.com');
$CFG->dbname    = getenv('dgicq3poj9f5');
$CFG->dbuser    = getenv('sjjxgqornoznfr');
$CFG->dbpass    = getenv('4a32278edfa5122d80edf53bd11a6565a40ec30f8c6a0c707d84a159e511f6f3');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://ysjmoodle.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
