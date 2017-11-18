<?php
/* >_ Developed by Vy Nghia */
require 'lib/class/confession.class.php';
define('WEBURL', 'https://webcf-onepiecehung.c9users.io');

$db = new Database;
$db->dbhost('eu-cdbr-west-01.cleardb.com');
$db->dbuser('bbcac040a59ad8');
$db->dbpass('73b79c6d4f03864');
$db->dbname('heroku_140e4f0e61c43cb');

$db->connect();

