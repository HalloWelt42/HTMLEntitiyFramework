<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Multiple extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'multiple';
      $this->attribute_value = $value;

  }


}