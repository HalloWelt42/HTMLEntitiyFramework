<?php
namespace htmlentity\model\attributes;

use htmlentity\model\HTMLAttribute;

class Type extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'type';
      $this->attribute_value = $value;

  }


}