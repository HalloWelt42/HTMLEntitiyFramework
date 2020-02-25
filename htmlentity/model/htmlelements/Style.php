<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TStyleAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IHTMLMetadata;

class Style extends HTMLElement implements IHTMLMetadata
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TStyleAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'style';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
