<?php 
include( "public/classes/View.class.php" );
get_header();

$v = new View();
$content = $v->show_page_content();
echo $content;

get_footer();