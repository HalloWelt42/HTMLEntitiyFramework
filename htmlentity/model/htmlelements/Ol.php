<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TOlAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Ol extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TOlAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'ol';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
