<?php
    require_once "ClassAutoLoad.php";

    $OBJ_Layouts->header();
    $OBJ_Layouts->nav();
    $OBJ_Article_Templates->view_articles($articles);
    $OBJ_Layouts->footer();