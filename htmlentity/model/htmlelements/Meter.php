<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TMeterAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IForms;

class Meter extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TMeterAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'meter';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
