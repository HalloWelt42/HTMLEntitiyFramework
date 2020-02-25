<?php

namespace htmlentity\model\htmlelements;


use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\IHTMLMetadata;

class Title extends HTMLElement implements IHTMLMetadata
{



  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'title';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }


}