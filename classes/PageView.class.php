<?php

class PageView {
    
    public function Get_Page_View_Content() {
        if(is_page() || is_front_page()) {
            $page_content = get_the_content();
            return $page_content;
        }
    }
}