<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TEmbedAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Embed extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TEmbedAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'embed';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
