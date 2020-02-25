<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TThAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\ITableContent;

class Th extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TThAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'th';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
