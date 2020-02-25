<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TSourceAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class Source extends HTMLElement implements IEmbeddedContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TSourceAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'source';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
