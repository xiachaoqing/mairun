<?php
# MetInfo Enterprise Content Management System


if(@!$_GET['a'])$_GET['a']="doindex";
@define('M_NAME', 'user');
@define('M_MODULE', 'web');
@define('M_CLASS', 'othercall');
@define('M_ACTION', $_GET['a']);
require_once '../app/system/entrance.php';

# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>



