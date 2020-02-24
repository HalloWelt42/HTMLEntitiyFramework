<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TButtonAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Button extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TButtonAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'button';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
