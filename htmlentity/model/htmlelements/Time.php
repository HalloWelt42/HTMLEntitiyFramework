<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TTimeAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IInlineTextSemantics;

class Time extends HTMLElement implements IInlineTextSemantics
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTimeAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'time';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
