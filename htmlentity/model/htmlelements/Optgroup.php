<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TOptgroupAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IForms;

class Optgroup extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TOptgroupAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'optgroup';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
