<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TFormAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Form extends HTMLElement
{
  use TFormAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'form';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;

  }
}