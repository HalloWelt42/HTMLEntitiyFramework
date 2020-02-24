<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Seamless extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'seamless';
      $this->attribute_value = $value;

  }


}