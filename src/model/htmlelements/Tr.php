<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TTrAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITableContent;

class Tr extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTrAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'tr';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
