<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TInsAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Ins extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TInsAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'ins';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}