<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TDelAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IDemarcatingEdits;

class Del extends HTMLElement implements IDemarcatingEdits
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TDelAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'del';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
