<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TParamAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IEmbeddedContent;

class Param extends HTMLElement implements IEmbeddedContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TParamAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'param';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
