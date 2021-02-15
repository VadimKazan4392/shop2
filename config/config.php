<?php 
//определение констант для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');


//имя используемого шаблона
$template = 'default';

define('TemplatePrefix', "../views/$template/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблона в вебпространстве
define('TemplateWebPath', "/templates/$template");

//инициализация шаблонизатора Smarty
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c/');
$smarty->setCacheDir('../tmp/smarty/cache/');
$smarty->setConfigDir('../library/Smarty/lexer/');

$smarty->assign('TemplateWebPath',TemplateWebPath);
