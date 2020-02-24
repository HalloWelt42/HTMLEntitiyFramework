<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TCanvasAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Canvas extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TCanvasAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'canvas';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
