<?php
# MetInfo Enterprise Content Management System

$a = @$_GET['a'] ? $_GET['a'] : 'do_online';

define('M_NAME', 'online');
define('M_MODULE', 'web');
define('M_CLASS', 'online');
define('M_ACTION', $a);
require_once '../app/system/entrance.php';

# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>
