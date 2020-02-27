<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TCanvasAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IScripting;

class Canvas extends HTMLElement implements IScripting
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TCanvasAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'canvas';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
