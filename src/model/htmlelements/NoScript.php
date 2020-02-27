<?php

namespace HEF\model\htmlelements;


use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IScripting;

class NoScript extends HTMLElement implements IScripting
{

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'noscript';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }


}