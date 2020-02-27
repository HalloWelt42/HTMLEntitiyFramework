<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TColgroupAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ITableContent;

class Colgroup extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TColgroupAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'colgroup';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
