<?php
require_once('../libs/Smarty.class.php');

$smarty  = new Smarty();
$smarty->testInstall();


$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');


$smarty->assign('name','Marc debazi');


//** un-comment the following line to show the debug console
$smarty->debugging = true;

$smarty->display('index.tpl');

?>

