<?php


namespace HEF\model\htmlelements;


use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\attributesets\TMetaTag;
use HEF\model\HTMLElement;
use HEF\model\htmlelements\groupinginterfaces\IHTMLMetadata;
use HEF\model\HTMLElements;

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