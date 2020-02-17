<?php

namespace htmlentity\model\htmlelements;

use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

/**
 * Class Body
 * @package htmlentity\model
 */
class Body extends HTMLElement {

    public function __construct (HTMLElements $html_elements = null)
    {
        $this->element_name = 'body';
        $this->html_elements=$html_elements;
    }

}