<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Width extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'width';
      $this->attribute_value = $value;

  }


}