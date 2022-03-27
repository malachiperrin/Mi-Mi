<?php 

require("classes/PageView.class.php");

$view = new PageView();

get_header();

$html = $view->Get_Page_View_Content();

echo $html;

get_footer();