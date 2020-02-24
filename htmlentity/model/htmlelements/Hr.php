<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\THrAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Hr extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use THrAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'hr';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
