<?php
namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IContentSection;

class Section extends HTMLElement implements IContentSection
{
  use TGlobalAttributes;
  use TEventHandlerAttributes;


  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'section';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}
