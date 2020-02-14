<?php

namespace oti\controller;

use oti\model\HTMLElements;

class HTMLSerializer{

    private $html_obj_list;

    public function __construct ( HTMLElements $html_obj_list )
    {

        $this -> html_obj_list = $html_obj_list;


    }


    public function compile(){
        $this ->parser($this->html_obj_list);
    }


    public function parser( $obj ){

        foreach ( (array)$obj as $html_obj ){
            $this -> parser($html_obj);
        }

    }

}