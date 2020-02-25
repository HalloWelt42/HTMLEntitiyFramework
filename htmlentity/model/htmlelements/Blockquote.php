<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TBlockquoteAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\ITextContent;

class Blockquote extends HTMLElement implements ITextContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TBlockquoteAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'blockquote';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
