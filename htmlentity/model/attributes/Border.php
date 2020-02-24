<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Border extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'border';
      $this->attribute_value = $value;

  }


}