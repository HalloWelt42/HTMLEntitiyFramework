<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TEmbedAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class Embed extends HTMLElement implements IEmbeddedContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TEmbedAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'embed';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
