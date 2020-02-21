<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Maxlength extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'maxlength';
      $this->attribute_value = $value;

  }


}