<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TButtonAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IForms;

class Button extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TButtonAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'button';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
