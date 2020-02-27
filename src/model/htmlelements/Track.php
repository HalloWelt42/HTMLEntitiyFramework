<?php
namespace HEF\model\htmlelements;

use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TTrackAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IMultimedia;

class Track extends HTMLElement implements IMultimedia
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTrackAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'track';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
