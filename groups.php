<?
require_once('classes/Connection.php');
$db = new Connection('localhost', 'itstep', '123123', 'itstep_db');
$groups = $db->selectAll('SELECT * FROM "group"');

