<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TScriptAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IScripting;

class Script extends HTMLElement implements IScripting
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TScriptAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'script';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
