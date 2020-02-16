<?php

namespace oti\model\htmlelements;

use oti\model\HTMLElement;
use oti\model\HTMLElements;

/**
 * Class Body
 * @package oti\model
 */
class Body extends HTMLElement {

    public function __construct (HTMLElements $html_elements = null)
    {
        $this->element_name = 'body';
        $this->html_elements=$html_elements;
    }

}