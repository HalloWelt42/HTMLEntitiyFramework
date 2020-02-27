<?php

namespace HEF\model\htmlelements;


use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\IHTMLMetadata;

class Title extends HTMLElement implements IHTMLMetadata
{



  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'title';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }


}