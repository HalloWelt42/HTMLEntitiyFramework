<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Controls extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'controls';
      $this->attribute_value = $value;

  }


}