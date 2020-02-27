<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TSourceAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class Source extends HTMLElement implements IEmbeddedContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TSourceAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'source';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
