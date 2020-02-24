<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TTdAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Td extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTdAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'td';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
