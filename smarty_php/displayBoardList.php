<?php
    require_once('./libs/Smarty.class.php');
    require_once('./includes/class-autoload.php');

    $broad = new Broad();
    $smarty = new Smarty;

    $goPage = (isset($_GET['page'])) ? $_GET['page'] : 1 ;

    $newBroad = $broad->showLimitBroad($goPage);

    $smarty->assign('postList', $newBroad);
    $smarty->display('./templates/blade/printpost.tpl');