<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Max extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'max';
      $this->attribute_value = $value;

  }


}