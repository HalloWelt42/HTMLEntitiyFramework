<?php

namespace oti\model\htmlelements;


use oti\model\HTMLElement;
use oti\model\HTMLElements;

class Head extends HTMLElement {

    public function __construct ( HTMLElements $html_elements = null )
    {
        $this->element_name = 'head';
        $this->html_elements=$html_elements;
    }


}