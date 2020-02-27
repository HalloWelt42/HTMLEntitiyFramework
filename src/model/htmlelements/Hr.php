<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\THrAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITextContent;

class Hr extends HTMLElement implements ITextContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use THrAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'hr';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
