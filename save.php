<?php
include 'includes/class-autoload.inc.php';

$tableAVal = $_POST['table_a_input'];
$tableBVal = $_POST['table_b_input'];
$tableCVal = $_POST['table_c_input'];

$formObj = new saveData();
$formObj->setData($tableAVal, $tableBVal, $tableCVal);