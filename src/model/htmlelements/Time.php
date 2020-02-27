<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TTimeAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IInlineTextSemantics;

class Time extends HTMLElement implements IInlineTextSemantics
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTimeAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'time';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
