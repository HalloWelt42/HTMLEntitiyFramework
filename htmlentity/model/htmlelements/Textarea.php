<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TTextareaAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IForms;

class Textarea extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTextareaAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'textarea';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
