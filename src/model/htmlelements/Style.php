<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TStyleAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IHTMLMetadata;

class Style extends HTMLElement implements IHTMLMetadata
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TStyleAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'style';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
