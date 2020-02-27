<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TMenuAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IInteractiveElement;

class Menu extends HTMLElement implements IInteractiveElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TMenuAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'menu';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
