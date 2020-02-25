<?php

namespace htmlentity\model\htmlelements;

use htmlentity\model\attributesets\TBodyAttributes;
use htmlentity\model\attributesets\TEventHandlerAttributes;
use htmlentity\model\attributesets\TGlobalAttributes;
use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;
use htmlentity\model\htmlelements\groupinginterfaces\ISectioningRoot;

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