<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TTableAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\ITableContent;

class Table extends HTMLElement implements ITableContent
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TTableAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'table';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
