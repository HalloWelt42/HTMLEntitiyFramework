<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TColgroupAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Colgroup extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TColgroupAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'colgroup';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
