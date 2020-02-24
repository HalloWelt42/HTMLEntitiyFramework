<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Sandbox extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'sandbox';
      $this->attribute_value = $value;

  }


}