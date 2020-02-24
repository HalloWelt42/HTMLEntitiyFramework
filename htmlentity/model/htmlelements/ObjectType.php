<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TObjectAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class ObjectType extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TObjectAttributes;
  #use TObjectAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'object';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
