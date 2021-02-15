<?php
include_once '../models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

/**
 * @param object $smarty
 */
function indexAction($smarty) {

    $rsCategories =  getAllCategories();

    $smarty->assign('pageTitle', 'Заголовок главной страницы');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}