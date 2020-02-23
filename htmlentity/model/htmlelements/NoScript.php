<?php

namespace htmlentity\model\htmlelements;


use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class NoScript extends HTMLElement
{

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'noscript';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }


}