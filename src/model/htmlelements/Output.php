<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TOutputAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IForms;

class Output extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TOutputAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'output';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
