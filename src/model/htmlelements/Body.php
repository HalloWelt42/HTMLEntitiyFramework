<?php

namespace HEF\model\htmlelements;

use HEF\model\attributesets\TBodyAttributes;
use HEF\model\attributesets\TEventHandlerAttributes;
use HEF\model\attributesets\TGlobalAttributes;
use HEF\model\HTMLElement;
use HEF\model\HTMLElements;
use HEF\model\htmlelements\groupinginterfaces\ISectioningRoot;

/**
 * Class Body
 * @package htmlentity\model
 */
class Body extends HTMLElement implements ISectioningRoot
{

  use TGlobalAttributes;
  use TEventHandlerAttributes;

  use TBodyAttributes;

  public function __construct(HTMLElements $html_elements = null)
  {
    $this->element_name = 'body';
    $this->html_elements = ($html_elements === null) ? new HTMLElements() : $html_elements;
  }

}