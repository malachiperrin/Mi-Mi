<?php

class View {
    protected $content;

    public function show_page_content() {
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $content = get_the_content();
                return $content;
            }
        }
    }
}
