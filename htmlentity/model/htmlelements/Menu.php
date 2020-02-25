<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TMenuAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IInteractiveElement;

class Menu extends HTMLElement implements IInteractiveElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TMenuAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'menu';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
