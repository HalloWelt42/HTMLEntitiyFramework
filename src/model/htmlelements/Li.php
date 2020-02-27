<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TLiAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITextContent;

class Li extends HTMLElement implements ITextContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TLiAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'li';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
