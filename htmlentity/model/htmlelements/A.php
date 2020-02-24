<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TAAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class A extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TAAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'a';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
