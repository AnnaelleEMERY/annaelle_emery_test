<?php

namespace Oxygen\WooElements;

class ProductDescription extends \OxyWooEl {

    function name() {
        return 'Product Description';
    }

    function render($options, $defaults, $content) {
        global $post;
        setup_postdata($post->ID);
        the_content();
    }

    function tag() {
        return array('default' => 'div', 'choices' => 'div,figcaption,time,article,summary,details' );
    }

    function woo_button_place() {
        return "single";
    }

    function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    }

    function controls() {

        $selector = "p";

        $this->addStyleControl(
            array(
                "property" => 'font-family',
                "selector" => $selector
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'color',
                "selector" => $selector
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'font-size',
                "selector" => $selector
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'font-weight',
                "selector" => $selector
            )
        );

        $this->addTagControl();
    
    }


    function defaultCSS() {
        return file_get_contents(__DIR__.'/'.basename(__FILE__, '.php').'.css');
    }

}

new ProductDescription();

