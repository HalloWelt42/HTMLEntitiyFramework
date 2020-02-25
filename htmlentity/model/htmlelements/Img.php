<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TImgAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IMultimedia;

class Img extends HTMLElement implements IMultimedia
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TImgAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'img';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
