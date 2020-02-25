<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TLiAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\ITextContent;

class Li extends HTMLElement implements ITextContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TLiAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'li';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
