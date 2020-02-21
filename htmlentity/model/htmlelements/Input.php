<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TInputAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Input extends HTMLElement
{

  use TInputAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'input';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}