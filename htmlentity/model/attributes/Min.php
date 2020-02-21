<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Min extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'min';
      $this->attribute_value = $value;

  }


}