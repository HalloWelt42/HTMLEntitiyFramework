<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TFieldsetAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Fieldset extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TFieldsetAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'fieldset';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
