<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class Picture extends HTMLElement implements IEmbeddedContent
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;


  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'picture';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
