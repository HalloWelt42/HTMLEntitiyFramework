<?php


namespace htmlentity\model\htmlelements;

use htmlentity\model\HTMLElement;
use htmlentity\model\HTMLElements;

/**
 * Class Body
 * @package htmlentity\model
 */
class Html extends HTMLElement {

  public function __construct ( HTMLElements $html_elements = null )
  {
    $this->element_name = 'html';
    $this -> html_elements = $html_elements;
  }

}