<?php
include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';

//определяем с какким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем метод
$actionName = isset($_GET['action']) ? $_GET['action'] : 'testAction';

loadPage($smarty, $actionName, $controllerName);
