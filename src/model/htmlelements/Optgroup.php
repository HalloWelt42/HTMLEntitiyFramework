<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TOptgroupAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IForms;

class Optgroup extends HTMLElement implements IForms
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TOptgroupAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'optgroup';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
