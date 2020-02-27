<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TTfootAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITableContent;

class Tfoot extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTfootAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'tfoot';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
