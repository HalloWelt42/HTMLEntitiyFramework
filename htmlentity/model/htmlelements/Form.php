<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TFormAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IForms;

class Form extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TFormAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'form';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;

  }
}