<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TObjectAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class ObjectType extends HTMLElement implements IEmbeddedContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TObjectAttributes;
  #use TObjectAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'object';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
