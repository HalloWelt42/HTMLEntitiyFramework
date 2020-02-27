<?php
namespace HEF\model\attributes;

use HEF\model\HTMLAttribute;

class Loop extends HTMLAttribute
{

  /**
   * 
   * 
   * Accept constructor.
   * @param null $value
   */
  public function __construct ( $value = NULL )
  {
      $this->attribute_name = 'loop';
      $this->attribute_value = $value;

  }


}