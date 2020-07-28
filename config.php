<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgs');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-52-204-20-42.compute-1.amazonaws.com');
$CFG->dbname    = getenv('d83bp02q4lq0a5');
$CFG->dbuser    = getenv('xuusduuoxfmdhy');
$CFG->dbpass    = getenv('4afd82a573c9e83001729865af5bac4c3bdd631265d68e127e974882f0ec4f24');
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
