<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Value extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'value';
      $this->attribute_value = $value;

  }


}