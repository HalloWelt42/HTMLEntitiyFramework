<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TQAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IInlineTextSemantics;

class Q extends HTMLElement implements IInlineTextSemantics
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TQAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'q';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
