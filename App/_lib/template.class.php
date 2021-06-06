<?php
class Template
{
    private $css = array(
        'main_css.css',
        'lightbox.css'
    );
    public function setCSS(){
        foreach($this->css as $css){
            echo '<link href="' . CSS_DIR . $css . '" rel="stylesheet" type="text/css" media="all" />';
        }
    }
}
