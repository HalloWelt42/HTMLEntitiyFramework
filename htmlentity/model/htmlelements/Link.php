<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TLinkAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Link extends HTMLElement
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TLinkAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'link';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}