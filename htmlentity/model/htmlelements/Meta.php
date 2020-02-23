<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\attributesets\TMetaTag;
use htmlentity\model\HTMLElement;
use htmlentity\model\htmlelements\groupinginterfaces\IHTMLMetadata;
use htmlentity\model\HTMLElements;

class Meta extends HTMLElement implements IHTMLMetadata
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TMetaTag;


  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'meta';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;

  }


}