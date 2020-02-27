<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TTbodyAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITableContent;

class Tbody extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTbodyAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'tbody';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
