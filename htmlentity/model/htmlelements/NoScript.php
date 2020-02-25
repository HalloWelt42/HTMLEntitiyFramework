<?php

namespace htmlentity\model\htmlelements;


use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IScripting;

class NoScript extends HTMLElement implements IScripting
{

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'noscript';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }


}