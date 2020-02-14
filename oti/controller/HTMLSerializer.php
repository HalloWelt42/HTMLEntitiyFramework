<?php

namespace oti\controller;

use DOMDocument;
use oti\model\HTMLElement;
use oti\model\HTMLElements;

class HTMLSerializer{

    const UTF_8 = 'utf-8';

    private $html_obj_list;
    private $dom;


    /**
     * HTMLSerializer constructor.
     *
     * @param HTMLElements $html_obj_list
     */
    public function __construct ( HTMLElements $html_obj_list )
    {

        $this -> html_obj_list = $html_obj_list;
        $this -> dom = new DOMDocument();
        $this -> dom -> encoding = self::UTF_8;
        $this -> dom -> xmlEncoding = self::UTF_8;
        $this -> dom -> xmlVersion = '1.0';


    }


    public function compile(){
        $this ->parser($this->html_obj_list);
    }


    public function parser( $obj ){

        /**
         * @var $html_obj HTMLElement
         */
        foreach ( $obj as $html_obj ){
            $this -> parser($html_obj);

            print_r($html_obj->get_element_name());
            print_r(PHP_EOL);

        }

    }

}