<?php

/**
 * загрузчик страниц
 * @param string $actionName имя метода
 * @param string $controllerName название контроллера
 * @param object $smarty
 */
function loadPage($smarty, $actionName, $controllerName = 'Index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param object $smarty объект шаблонизатора
 * @param string $templateName имя шаблона
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display(TemplatePrefix . $templateName . TemplatePostfix);
}

/**
 * @param null $value
 * @param int $die
 */
function d($value = null, $die = 1) {
    echo ("Debug: <br/> <pre>");
    print_r($value);
    echo ("</pre>");

    if ($die) die;
    
}




