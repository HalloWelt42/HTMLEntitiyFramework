<?php


namespace oti\model\htmlelements;

use oti\model\HTMLElement;
use oti\model\HTMLElements;

/**
 * Class Body
 * @package oti\model
 */
class Html extends HTMLElement {

  public function __construct ( HTMLElements $html_elements = null )
  {
    $this->element_name = 'html';
    $this -> html_elements = $html_elements;
  }

}