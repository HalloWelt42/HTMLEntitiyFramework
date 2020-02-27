<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TMapAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IMultimedia;

class Map extends HTMLElement implements IMultimedia
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TMapAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'map';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
