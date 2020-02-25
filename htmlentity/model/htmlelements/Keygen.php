<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TKeygenAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IDeprecatedElements;

class Keygen extends HTMLElement implements IDeprecatedElements
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TKeygenAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'keygen';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
