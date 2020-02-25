<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TDetailsAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IInlineTextSemantics;
use htmlentity\model\htmlelements\groupinginterfaces\IInteractiveElement;

class Details extends HTMLElement implements IInteractiveElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TDetailsAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'details';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
