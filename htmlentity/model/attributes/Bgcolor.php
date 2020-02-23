<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Bgcolor extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'bgcolor';
      $this->attribute_value = $value;

  }


}