<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TBaseAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IHTMLMetadata;

class Base extends HTMLElement implements IHTMLMetadata
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;


  use TBaseAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'base';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
