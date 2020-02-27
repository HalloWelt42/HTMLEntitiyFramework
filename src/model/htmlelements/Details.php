<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TDetailsAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IInlineTextSemantics;
use HEF\model\htmlelements\groupinginterfaces\IInteractiveElement;

class Details extends HTMLElement implements IInteractiveElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TDetailsAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'details';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
