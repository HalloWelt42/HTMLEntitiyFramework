<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TKeygenAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IDeprecatedElements;

class Keygen extends HTMLElement implements IDeprecatedElements
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TKeygenAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'keygen';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
