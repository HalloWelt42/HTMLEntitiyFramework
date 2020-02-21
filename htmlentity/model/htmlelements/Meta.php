<?php


namespace htmlentity\model\htmlelements;


use htmlentity\model\attributesets\TMetaTag;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

class Meta extends HTMLElement
{

  use TMetaTag;


  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'meta';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;

  }


}