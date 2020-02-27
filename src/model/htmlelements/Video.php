<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TVideoAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IMultimedia;

class Video extends HTMLElement implements IMultimedia
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TVideoAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'video';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
