<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Autofocus extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'autofocus';
      $this->attribute_value = $value;

  }


}