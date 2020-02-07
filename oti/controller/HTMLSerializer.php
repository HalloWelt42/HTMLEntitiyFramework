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

        foreach ( (array)$this->html_obj_list as $html_obj ){
            print_r( $html_obj );
            print_r(PHP_EOL);
        }

    }

}