<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TBaseAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Base extends HTMLElement
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;


  use TBaseAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'base';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
