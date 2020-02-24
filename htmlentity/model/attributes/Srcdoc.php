<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Srcdoc extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'srcdoc';
      $this->attribute_value = $value;

  }


}